<div id="searchTop"></div>
<h1 class="headerBar">Search results</h1>
{foreach $results['items'] as $book}
        {assign var="author" value=""}
        <div id="bookResult{$book@iteration}" class="bookResult{if $book@iteration % 2 == 0} odd{/if}{if $book@last} last{/if} row">
            <div class="book-img-small left">
                <img src="{if isset($book->SmallImage->URL)}{$book->SmallImage->URL}{else}/assets/images/book_small.png{/if}" />
            </div>

            <div class="details right">
                {if !empty($book->ItemAttributes->Author)}
                    <div class="title bold"><span>Author{if isset($book->ItemAttributes->Author) && is_array($book->ItemAttributes->Author)}s{/if}:</span>
                        {if isset($book->ItemAttributes->Author) && is_array($book->ItemAttributes->Author)}
                            {assign var="authorName" value=", "|implode:$book->ItemAttributes->Author}
                            {", "|implode:$book->ItemAttributes->Author}
                        {else}
                            {assign var="authorName" value=$book->ItemAttributes->Author}
                            {$book->ItemAttributes->Author}
                        {/if}
                    </div>
                {/if}
                <div class="title bold"><span>Title:</span> {$book->ItemAttributes->Title}</div>
                {if !empty($book->ItemAttributes->PublicationDate)}
                    <div class="title bold"><span>Publication date:</span> {$book->ItemAttributes->PublicationDate}</div>
                {/if}
            </div>
            <div class="actions cleared">
                <div class="btn showDetails" data-item="{$book@iteration}">Details</a></div>
                <div class="text">- or -</div>
                <div class="btn findPrices" data-item="{$book@iteration}" data-asin="{$book->ASIN}" data-isbn="{$book->ItemAttributes->ISBN}" data-author="{$authorName}" data-title="{$book->ItemAttributes->Title}"><i class="fa fa-book searchButton"></i> Find prices</div>
            </div>
            <div class="prices"></div>

            <div style="display:none;" class="">
                <div class="fullDetails" id="details_{$book@iteration}">
                    <div class='image'>
                        <img src="{if isset($book->MediumImage->URL)}{$book->MediumImage->URL}{else}/assets/images/book.png{/if}" />
                    </div>
                    <div class="details col-md-7">
                        {if !empty($book->ItemAttributes->Author)}
                            <span>Author:</span> 
                            {if is_array($book->ItemAttributes->Author)}
                                {", "|implode:$book->ItemAttributes->Author}
                            {else}
                                {$book->ItemAttributes->Author}
                            {/if}<br />
                        {/if}
                    {if isset($book->ItemAttributes->Title)}
                        <span>Title:</span> {$book->ItemAttributes->Title}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Binding)}
                        <span>Binding:</span> {$book->ItemAttributes->Binding}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Height)}
                        <span>Dimensions:</span> 
                            {$book->ItemAttributes->ItemDimensions->Height->_} x 
                            {$book->ItemAttributes->ItemDimensions->Length->_} x 
                            {$book->ItemAttributes->ItemDimensions->Width->_}
                            ({$book->ItemAttributes->ItemDimensions->Height->Units})<br />
                    {/if}
                    {if isset($book->ItemAttributes->ItemDimensions->Weight)}
                        <span>Weight:</span> {$book->ItemAttributes->ItemDimensions->Weight->_}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Manufacturer)}
                        <span>Manufacturer:</span> {$book->ItemAttributes->Manufacturer}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Manufacturer)}
                        <span>EAN:</span> {$book->ItemAttributes->EAN}<br />
                    {/if}
                    {if isset($book->ItemAttributes->ISBN)}
                        <span>ISBN:</span> {$book->ItemAttributes->ISBN}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Edition)}
                        <span>Edition:</span> {$book->ItemAttributes->Edition}<br />
                    {/if}
                    {if isset($book->ItemAttributes->Language)}
                        <span>Languages:</span> 
                        {foreach $book->ItemAttributes->Languages->Language as $language}
                                {$language->Name}-{$language->Type} {if !$language@last}|{/if}
                        {/foreach}
                        <br />
                    {/if}
                    {if isset($book->ItemAttributes->NumberOfPages)}
                        <span>Num pages::</span> {$book->ItemAttributes->NumberOfPages}<br />
                    {/if}
                    {if isset($book->EditorialReviews->EditorialReview->Content)}
                        <span>Description:</span> {$book->EditorialReviews->EditorialReview->Content}<br />
                    {/if}
                    {if isset($book->ItemAttributes->PublicationDate)}
                        <span>Publication date:</span> {$book->ItemAttributes->PublicationDate}
                    {/if}
                    </div>
                    <div class="links col-md-3">                
                        <div class="button buyAmazon col-xs-12" data-url="{$book->DetailPageURL}">Buy on Amazon</div>
                        - OR -
                        <div class="inFancybox button findPrices" data-item="{$book@iteration}" data-asin="{$book->ASIN}" data-isbn="{$book->ItemAttributes->ISBN}" data-author="{$authorName}" data-title="{$book->ItemAttributes->Title}"><i class="fa fa-book searchButton"></i> Find prices</div>
                    </div>
                </div>
            </div>    
        </div>
{/foreach}
<br />
{*
Total pages: {if $results['totalPages'] > 10}{else}{$results['totalPages']}{/if} 
*}

<div id="footerLoader" class="loadingBar col-md-12 col-xs-12 hidden"><i class="fa fa-refresh fa-spin"></i> Searching</div>
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
<div id="nextButtons">
    Page:
{for $count = 1 to $totalPages}
    <button {if $count == $page}class="on"{/if}>{$count}</button>
{/for}
</div>
{/if}