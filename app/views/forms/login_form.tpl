<form id = "{$form->getName()}" onsubmit = "go('login','{$form->getName()}'); return false;">
  <div style = "display:inline;">
    Login: {$form->getInput('login')->getView()}
    Hasło: {$form->getInput('password')->getView()}
    {$form->getInput('submit')->getView()}
  </div>
</form>
