<form id = "{$form->getVar('name')}_modify" onsubmit = "go('modifySet','{$form->getVar('name')}_modify'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    Zestaw: {$form->getInput('name')->getView()}
    {$form->getInput('submit_modify')->getView()}
    {$form->getInput('id')->getView()}
  </div>
</form>

<form id = "{$form->getVar('name')}_delete" onsubmit = "go('deleteSet','{$form->getVar('name')}_delete'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    {$form->getInput('submit_delete')->getView()}
    {$form->getInput('id')->getView()}
  </div>
</form>
