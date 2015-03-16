
        <script type="text/javascript" src="/assets/js/modernizr.custom.85895.js"></script>
        <script type="text/javascript" src="/assets/js/respond.js"></script>
        <script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery-ui-1.8.18.custom.min.js"></script>
        <script type="text/javascript" src="/assets/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="/assets/js/search.js"></script>
        

        <script>
            var vendors = [{foreach $vendors as $vendor}"{$vendor->name}"{if !$vendor@last},{/if}{/foreach}];
            var country = '{$country->code_3}';
            
            {literal}
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-57013083-1', 'auto');
            ga('send', 'pageview'); 
            
            function scrollToID(id, speed){
                if($("#searchTop").length){
                    var offSet = 60;
                    var targetOffset = $(id).offset().top - offSet;
                    $('html,body').animate({scrollTop:targetOffset}, speed);
                }
            }
            
            // responsive
            (function ($, window, document, undefined){
                'use strict';$(function (){
                    $("#mobileMenu").hide();
                    $(".toggleMobile").click(function(){
                        $(this).toggleClass("active");
                        $("#mobileMenu").slideToggle(500);
                    });
                });
                $(window).on("resize", function(){
                    if($(this).width() > 500){
                        $("#mobileMenu").hide();
                        $(".toggleMobile").removeClass("active");
                    }});
            })(jQuery, window, document);
            {/literal}
        </script>
        
       