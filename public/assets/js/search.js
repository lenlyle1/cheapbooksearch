var count, vendorCount;
var Search = {
    run: function(form, page){
        if(typeof form == "object"){            
            var className = $(form).attr('class');
            var data = $(form).serialize();
            $("#author").val($(form).find("[name=author]").val())
            $("#title").val($(form).find("[name=title]").val())
        } else {
            var data = $("#"+form).serialize();
        }
        console.log(data);
        if(typeof page != 'undefined'){
            data += '&itemPage='+page;
        }
        $.ajax({
            type: "post",
            url: '/' + country +'/search/',
            data: data,
            beforeSend: function(){
                if(className == 'nyt'){
                    console.log('nyt loader');
                    Search.showLoadingBar('header');
                } else {
        console.log('running');
                    if(form != "loadMore"){
                        $("#searchButton").css('color', '#ff0')
                        $("#searchButton").removeClass('fa-book');
                        $("#searchButton").addClass('fa-refresh');
                        $("#searchButton").addClass('fa-spin');
                    } else {
                        Search.showLoadingBar('footer');
                    }
                }
            }
        }).done(function(result){
            if(typeof form == "object"){   
                Search.hideLoadingBar('header');
            } else {
                if(form != "loadMore"){
                    $("#searchButton").css('color', '#fff')
                    $("#searchButton").removeClass('fa-refresh');
                    $("#searchButton").removeClass('fa-spin');
                    $("#searchButton").addClass('fa-book');
                } else {
                    Search.hideLoadingBar('footer');
                }
            }
            if(typeof result == "undefined"){
                Search.handleNull();
                return;
            }
            $("#results").html(result);
            scrollToID("#searchTop", 500);
            // set up find pricese
            $(".findPrices").on('click', function(){
                Search.findPrices(this);
            });
            $(".buyAmazon").on('click', function(){
                Search.linkTo($(this).data('url'));
            })
            $("#nextButtons button").on('click', function(){
                console.log($(this).html());
                Search.run('loadMore', $(this).html());
            })
            $(".showDetails").on('click', function(){
                $.fancybox({
                    'content'       : $('#details_'+$(this).data('item')),
                    'transitionIn'  : 'elastic',
                    'transitionOut' : 'fade',
                    'speedIn'       : 600,
                    'speedOut'      : 200,
                    'autoSize'      : false,
                    'width'         : 800,
                    'height'        : 'auto',
                    'overlayShow'   : false,
                    'centerOnScroll': true
                });
            });
        });
    },

    findPrices: function(button){
        var parent = $(button).parent().parent();
        $(button).off();
        count = 0;
        vendorCount = vendors.length;

        $(parent).find('.prices').html('');
        var isbn = $(button).data('isbn');
        $(button).find(".searchButton").css('color', '#ff0')
        $(button).find(".searchButton").removeClass('fa-book');
        $(button).find(".searchButton").addClass('fa-refresh');
        $(button).find(".searchButton").addClass('fa-spin');

        $(vendors).each(function(id, vendor){
            console.log(vendor);
            Search.ajaxPriceCheck(button, isbn, vendor);
        });



    },

    ajaxPriceCheck: function(button, isbn, vendor){
        var parent = $(button).parent().parent();
        $.ajax({
            type: "post",
            url: '/' + country +'/findprice/',
            //dataType: "json",
            data: {
                    'vendor': vendor,
                    'asin': $(button).data('asin'),
                    'isbn': $(button).data('isbn'),
                    'author': $(button).data('author'),
                    'title': $(button).data('title')
                   }
        }).done(function(data){
            count++;
            $("#bookResult"+$(button).data("item")).find('.prices').css("display", "block")
            $("#bookResult"+$(button).data("item")).find('.prices').append(data);
                
            $("#bookResult"+$(button).data("item")).find('.prices').find('.buyLink').on('click', function(){
                if( $(this).data('url') != "" ){
                    Search.linkTo($(this).data('url'));
                }
            })
            
            $(button).unbind('click');
            $(button).on('click', function(){
                Search.findPrices(this);
            });
            if(count == vendorCount){
                if($(button).hasClass('inFancybox')){
                    $.fancybox.close();
                }
                var len = $("#bookResult"+$(button).data("item")).find(".priceRow").length;
                $("#bookResult"+$(button).data("item")).find(".priceRow").each(function(index, row){
                    if(index == len - 1){
                        $(row).addClass("last");
                        console.log('last row')
                    }
                })
                $('html, body').animate({
                    scrollTop: $("#bookResult"+$(button).data("item")).offset().top - 60
                }, 1000);
                
                console.log('all done');
                $(button).find(".searchButton").css('color', '#fff');
                $(button).find(".searchButton").removeClass('fa-refresh');
                $(button).find(".searchButton").removeClass('fa-spin');
                $(button).find(".searchButton").addClass('fa-book');
            }
        });
    },
    
    showLoadingBar: function(id){
        console.log('showing ' + id)
        $("#" + id + "Loader").removeClass('hidden');
    },
    
    hideLoadingBar: function(id){
        console.log('hiding ' + id)
        $("#" + id + "Loader").addClass('hidden');
    },
    
    linkTo: function(url){
        console.log('/' + country + '/redirect/?url='+url);
        var win = window.open('/' + country + '/redirect/?url='+url, '_blank');
    },

    handleNull: function(){
        console.log('null response');
    }
}

$( document ).ready(function(){
    $('form input').keypress(function (e) {
        var key = e.which;
        if(key == 13){
            Search.run("form");
            return false;
        }
    });
    $(".nyt-img").on('click', function(){
        console.log('searching');
        console.log($(this).parent().attr('class'))
        Search.run($(this).parent());
    })
});
