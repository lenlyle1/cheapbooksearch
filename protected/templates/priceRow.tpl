<div data-url="{$link}" data-country="{$country->code_3}" class="priceRow buyLink">
    <span>{$vendor}:</span>
    has <span>{$stock}</span> items
    {if isset($price) && $link}
        , with prices starting at <span>{$price}</span>    
    {/if}
</div>