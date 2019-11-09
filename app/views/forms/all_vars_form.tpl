<form id = "{$form->getVar('name')}_modify" onsubmit = "go('modifyVar','{$form->getVar('name')}_modify'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    Nazwa: {$form->getInput('name')->getView()} Początek: {$form->getInput('begin')->getView()} Koniec: {$form->getInput('end')->getView()}
    {$form->getInput('submit_modify')->getView()}
    {$form->getInput('id')->getView()}
  </div>
</form>

<form id = "{$form->getVar('name')}_delete" onsubmit = "go('deleteVar','{$form->getVar('name')}_delete'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    {$form->getInput('submit_delete')->getView()}
    {$form->getInput('id')->getView()}
  </div>
</form>
