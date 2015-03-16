<!DOCTYPE HTML>
<html lang="en">
    <head>        
        <link rel="icon" href="/favicon.ico">
        <title>{$pagetitle}</title>

        {include file='metaTags.tpl'}
        
        
        <link rel="stylesheet" type="text/css" href="/assets/css/reset.css" />
        
        <link rel="stylesheet" type="text/css" href="/assets/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/header.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/nyt.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/searchform.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/results.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/footer.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css" />
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
            <div class="container">
                <div class="logo">
                    <a href="/{$country->code_3}/">
                        <span class="cheap">Cheap</span>
                        <span class="text">Book Search</span>
                    </a>  
                </div>
                <div class="toggleMobile">
                    <span class="menu1"></span>
                    <span class="menu2"></span>
                    <span class="menu3"></span>
                </div>
                <div id="mobileMenu">
                    <ul>
                        {foreach $countries as $ctry}
                        <li {if $ctry->code_3 == $country->code_3}class="active"{/if}>
                            <a href="/{$ctry->code_3}/">
                                <img src="/assets/images/flags/32/{$ctry->code_2}.png" />
                            </a>
                        </li>
                        {/foreach}
                    </ul>
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
            </div>
        </header>
                
        <section class="body">
           
            <div class="container" role="main">
                <div class="nyt-holder">
                    {foreach $bestsellers as $book}
                        {if $book@iteration <= 6}
                            <div class="nyt-item" data-name="nyt">
                                <div class="nyt-wrapper" >
                                    <form class="nyt">
                                        <input type="hidden" name="author" value="{ucwords($book->book_details[0]->author)}" />
                                        <input type="hidden" name="title" value="{ucwords(strtolower($book->book_details[0]->title))}" />
                                        <img src="{$book->book_details[0]->book_image}" class="nyt-img"/>
                                    </form>
                                </div>
                            </div>
                        {/if}
                    {/foreach}
                </div>
                    
                <div class="cleared"></div>
                
                <div id="headerLoader" class="loadingBar hidden"><i class="fa fa-refresh fa-spin"></i> Searching</div>

                <h2>{translate key="find_lowest" default="Find the Lowest Prices On Millions of Books Instantly"}</h2>
                {translate key="free_search" default="CheapBookSearch.com is a <b>free book search engine</b> where you’ll find the lowest prices on millions of books so you can read more and pay less."}
                {include 'searchForm.tpl'}

                <div id="results">
                    <h4>{translate key="how_it_works" default="How It Works"}:</h4>
                    <ul>
                        <li>{translate key="type_title" default="Type in a title or author to instantly search millions of books and find the cheapest price - <b>now you’ll always get the best deal on every book you buy</b>"}
                        </li>
                        <li>{translate key="see_reviews" default="See reviews, summaries, and deals all in one place so you don’t waste hours of time searching hundreds of other book sites"}</li>
                        <li>{translate key="buy_direct" default="Buy direct from 100’s of vendors  and get your books fast - we are a 100% FREE SERVICE and always will be"}</li>
                    </ul>
                </div>
            </div>
        </section>  
        <footer  class="container footer cleared">
            &copy; <a href="/">Cheap Book Search {'Y'|date}</a>
        </footer>  
    </body>
    {*
    {include 'debug.tpl'}
    *}
</html>

