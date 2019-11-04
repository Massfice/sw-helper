{foreach $msgs->getMessages() as $msg}
  {if $msg->isError()}
      {$msg->text}
  {/if}
{/foreach}
