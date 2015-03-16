<div id="searchTop"></div>
<h1 class="headerBar">{translate key="search_results" default="Search Results"}</h1>
{foreach $results['items'] as $book}
        {assign var="author" value=""}
        <div id="bookResult{$book@iteration}" class="bookResult{if $book@iteration % 2 == 0} odd{/if}{if $book@last} last{/if} row cleared">
            <div class="book-img-small left">
                <img src="{if isset($book->SmallImage->URL)}{$book->SmallImage->URL}{else}/assets/images/book_small.png{/if}" />
            </div>

            <div class="details">
                {if !empty($book->ItemAttributes->Author)}
                    <div class="title"><span>{translate key="author" default="Author"}{if isset($book->ItemAttributes->Author) && is_array($book->ItemAttributes->Author)}s{/if}:</span>
                        {if isset($book->ItemAttributes->Author) && is_array($book->ItemAttributes->Author)}
                            {assign var="authorName" value=", "|implode:$book->ItemAttributes->Author}
                            {", "|implode:$book->ItemAttributes->Author}
                        {else}
                            {assign var="authorName" value=$book->ItemAttributes->Author}
                            {$book->ItemAttributes->Author}
                        {/if}
                    </div>
                {/if}
                <div class="title"><span>{translate key="title" default="Title"}:</span> {$book->ItemAttributes->Title}</div>
                {if !empty($book->ItemAttributes->PublicationDate)}
                    <div class="title"><span>{translate key="publication_date" default="Publication date"}:</span> {$book->ItemAttributes->PublicationDate}</div>
                {/if}
            </div>
            <div class="actions">
                <div class="btn showDetails" data-item="{$book@iteration}">{translate key="details" default="Details"}</a></div>
                <div class="text">- or -</div>
                <div class="btn findPrices" data-item="{$book@iteration}" data-asin="{$book->ASIN}" data-isbn="{$book->ItemAttributes->ISBN}" data-author="{$authorName}" data-title="{$book->ItemAttributes->Title}"><i class="fa fa-book searchButton"></i> {translate key="find_prices" default="Find prices"}</div>
            </div>
            <div class="prices cleared"></div>

        <div class="cleared"></div>

            <div style="display:none;" class="">
                <div class="fullDetails" id="details_{$book@iteration}">
                    <div class='image'>
                        <img src="{if isset($book->MediumImage->URL)}{$book->MediumImage->URL}{else}/assets/images/book.png{/if}" />
                    </div>
                    <div class="details col-md-7">
                        {if !empty($book->ItemAttributes->Author)}
                            <span>{translate key="author" default="Author"}:</span> 
                            {if is_array($book->ItemAttributes->Author)}
                                {", "|implode:$book->ItemAttributes->Author}
                            {else}
                                {$book->ItemAttributes->Author}
                            {/if}<br />
                        {/if}
                    {if isset($book->ItemAttributes->Title)}
                        <span>{translate key="title" default="Tile"}:</span> {$book->ItemAttributes->Title}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Binding)}
                        <span>{translate key="binding" default="Binding"}:</span> {$book->ItemAttributes->Binding}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Height)}
                        <span>{translate key="dimensions" default="Dimensions"}:</span> 
                            {$book->ItemAttributes->ItemDimensions->Height->_} x 
                            {$book->ItemAttributes->ItemDimensions->Length->_} x 
                            {$book->ItemAttributes->ItemDimensions->Width->_}
                            ({$book->ItemAttributes->ItemDimensions->Height->Units})<br />
                    {/if}
                    {if isset($book->ItemAttributes->ItemDimensions->Weight)}
                        <span>{translate key="weight" default="Weight"}:</span> {$book->ItemAttributes->ItemDimensions->Weight->_}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Manufacturer)}
                        <span>{translate key="manufacturer" default="Manufacturer"}:</span> {$book->ItemAttributes->Manufacturer}<br />
                    {/if}
                    {if isset($book->ItemAttributes->EAN)}
                        <span>{translate key="ean" default="EAN"}:</span> {$book->ItemAttributes->EAN}<br />
                    {/if}
                    {if isset($book->ItemAttributes->ISBN)}
                        <span>{translate key="isbn" default="ISBN"}:</span> {$book->ItemAttributes->ISBN}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Edition)}
                        <span>{translate key="edition" default="Edition"}:</span> {$book->ItemAttributes->Edition}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Language)}
                        <span>{translate key="languages" default="Languages"}:</span> 
                        {foreach $book->ItemAttributes->Languages->Language as $language}
                                {$language->Name}-{$language->Type} {if !$language@last}|{/if}
                        {/foreach}
                        <br />
                    {/if}
                    {if isset($book->ItemAttributes->NumberOfPages)}
                        <span>{translate key="num_pages" default="Num pages"}:</span> {$book->ItemAttributes->NumberOfPages}<br />
                    {/if}
                    {if isset($book->EditorialReviews->EditorialReview->Content)}
                        <span>{translate key="description" default="Description"}:</span> {$book->EditorialReviews->EditorialReview->Content}<br />
                    {/if}
                    {if isset($book->ItemAttributes->PublicationDate)}
                        <span>{translate key="publication_date" default="Publication Date"}:</span> {$book->ItemAttributes->PublicationDate}
                    {/if}
                    </div>
                    <div class="links col-md-3">                
                        <div class="btn buyAmazon" data-url="{$book->DetailPageURL}">{translate key="buy_on_amazon" default="Buy on Amazon"}</div>
                        - {translate key="or" default="OR"} -
                        <div class="inFancybox btn findPrices" data-item="{$book@iteration}" data-asin="{$book->ASIN}" data-isbn="{$book->ItemAttributes->ISBN}" data-author="{$authorName}" data-title="{$book->ItemAttributes->Title}"><i class="fa fa-book searchButton"></i> {translate key="find_prices" default="Find Prices"}</div>
                    </div>
                </div>

            </div>    
        </div>
{/foreach}
<br />
{*
Total pages: {if $results['totalPages'] > 10}{else}{$results['totalPages']}{/if} 
*}

<div id="footerLoader" class="loadingBar hidden cleared"><i class="fa fa-refresh fa-spin"></i> Searching</div>
<form id="loadMore">
    <input type="hidden" name="author" value="{$post.author}" />
    <input type="hidden" name="title" value="{$post.title}" />
    <input type="hidden" name="isbn" value="{$post.isbn}" />
    <input type="hidden" name="keywords" value="{$post.keywords}" />
</form>
{if isset($results['totalPages'])}
{assign var="totalPages" value=$results['totalPages']}
{if $totalPages > 10}
    {assign var="totalPages" value=10}
{/if}
<div id="nextButtons" class="cleared">
    {translate key="page" default="Page"}:
{for $count = 1 to $totalPages}
    <button {if $count == $page}class="on"{/if}>{$count}</button>
{/for}
</div>
{/if}