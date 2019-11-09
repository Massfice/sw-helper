<div style = "padding-bottom:15px; padding-top:15px;">{$sets_form}</div>
<div>

  {if isset($all_sets) && is_array($all_sets)}
  {foreach $all_sets as $set}
    <div style = "padding-top:5px;padding-bottom:5px;">{$set}</div>
  {/foreach}
  {/if}

</div>
