<!DOCTYPE HTML>
<html lang="en">
    <head>        
        <link rel="icon" href="/favicon.ico">
        <title>{$pagetitle}</title>

        {include file='metaTags.tpl'}
        
        
        <link rel="stylesheet" type="text/css" href="/assets/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/header.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
        {*
        *}
        <link href='http://fonts.googleapis.com/css?family=Sonsie+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        
        {include file='scripts.tpl'}
        <link rel="stylesheet" href="/assets/js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />   
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    
    <body>
        <header>
            <div class="logo">
                <a href="/{$country->code_3}/">
                    <span class="cheap">Cheap</span>
                    <span class="text">Book Search</span>
                </a>  
            </div>
            <nav>                   
                <ul >
                    {foreach $countries as $ctry}
                    <li {if $ctry->code_3 == $country->code_3}class="active"{/if}>
                        <a href="/{$ctry->code_3}/">
                            <img src="/assets/images/flags/32/{$ctry->code_2}.png" />
                        </a>
                    </li>
                    {/foreach}
                </ul>
            </nav>
        </header>
                
        <section class="body">
            {*
            <div class="container" role="main">
                <div class="btn-toolbar cleared">
                    <div class="search-form btn-group btn-group-sm cleared nyt" >
                            {foreach $bestsellers as $book}
                                {if $book@iteration <= 6}
                                    <div class="btn btn-nyt col-xs-2 col-md-2">
                                        <form class="nyt">
                                            <input type="hidden" name="author" value="{ucwords($book->book_details[0]->author)}" />
                                            <input type="hidden" name="title" value="{ucwords(strtolower($book->book_details[0]->title))}" />
                                            <img src="{$book->book_details[0]->book_image}" class="nyt-img"/>
                                        </form>
                                    </div>
                                {/if}
                            {/foreach}
                    </div>
                </div>
                *} 
                <div id="headerLoader" class="loadingBar hidden"><i class="fa fa-refresh fa-spin"></i> Searching</div>

                <h3>Find the Lowest Prices On Millions of Books Instantly</h3>
                CheapBookSearch.com is a <b>free book search engine</b> where you’ll find the lowest prices on millions of books so you can read more and pay less.
                {include 'searchForm.tpl'}

                <div id="results">
                    <h4>How It Works:</h4>
                    <ul>
                        <li>Type in a title or author to instantly search millions of books and find the cheapest price - <b>now you’ll always get the best deal on every book you buy</b></li>
                        <li>See reviews, summaries, and deals all in one place so you don’t waste hours of time searching hundreds of other book sites</li>
                        <li>Buy direct from 100’s of vendors  and get your books fast - we are a 100% FREE SERVICE and always will be</li>
                    </ul>
                </div>
            </div>
        </section>    
    </body>
    {*
    {include 'debug.tpl'}
    *}
</html>

