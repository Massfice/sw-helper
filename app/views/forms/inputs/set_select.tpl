<select name = "{$input->getName()}" form ="{$form->getName()}" id="{$form->getName()}_{$input->getName()}">
  {foreach $input as $i}
    {$i}
  {/foreach}
</select>
