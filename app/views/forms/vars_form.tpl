<form id = "{$form->getName()}" onsubmit = "go('createVar','{$form->getName()}'); return false;">
  <div style = "display:inline;">
    Nazwa: {$form->getInput('name')->getView()} Początek: {$form->getInput('begin')->getView()} Koniec: {$form->getInput('end')->getView()}
    {$form->getInput('submit')->getView()}
  </div>
</form>
