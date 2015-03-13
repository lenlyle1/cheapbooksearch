<div id="debug">
    <h1>Debugging:</h1>
    {foreach $debugItems as $debug}
    <div class="item">
        <div class="title">
        {$debug.name} - {$debug.file}:{$debug.line}
        </div>
        <div class="content">
            <div class="value">
<pre>{$debug.data}
{if $debug.backtrace != ''}
<b>Backtrace: </b>
{$debug.backtrace}</pre>
{/if}
             </div>
        </div>
    </div>
    {/foreach}
</div>