{block name = 'up'}
<li><a href="javascript:void(0);" onclick = "go('setsView');"><span>Zestawy zmiennych</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('varsView');"><span>Zmienne</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('generatorView');"><span>Generator</span></a></li>
{if isset($sets_list_form)}{$sets_list_form}{/if}
{/block}

{block name = 'down'}
{/block}

{block name = 'title'}
Generator Postów
{/block}
