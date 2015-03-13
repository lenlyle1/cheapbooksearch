<div data-url="{$link}" data-country="{$country->code_3}" class="priceRow buyLink">
    <b>{$vendor}:</b>
    has <b>{$stock}</b> items
    {if isset($price) && $link}
        , with prices starting at <b>{$price}</b>    
    {/if}
</div>