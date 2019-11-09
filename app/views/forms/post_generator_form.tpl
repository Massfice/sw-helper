<form id = "{$form->getName()}" onsubmit = "go('generatePost','{$form->getName()}'); return false;">

{foreach $form as $k => $input}

  {if $k == 'submit'}<div style = "padding-top:30px;">{$input->getView()}</div>{else}{$input->getView()}{/if}

{/foreach}

</form>
