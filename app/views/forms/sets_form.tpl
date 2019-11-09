<form id = "{$form->getName()}" onsubmit = "go('createSet','{$form->getName()}'); return false;">
  <div style = "display:inline;">
    Nazwa: {$form->getInput('name')->getView()}
    {$form->getInput('submit')->getView()}
  </div>
</form>
