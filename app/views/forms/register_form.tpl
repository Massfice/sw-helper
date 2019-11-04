<form id = "{$form->getName()}" onsubmit = "go('register','{$form->getName()}'); return false;">
  <div style = "display:inline;">
    Login: {$form->getInput('login')->getView()}
    Hasło: {$form->getInput('password')->getView()}
    Powtórz: {$form->getInput('repassword')->getView()}
    {$form->getInput('submit')->getView()}
  </div>
</form>
