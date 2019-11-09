<form id = "{$form->getVar('name')}_modify" onsubmit = "go('modifyVar','{$form->getVar('name')}_modify'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    <div style = "padding-top:15px;padding-bottom:15px">
      <div style = "padding-bottom:5px;">Nazwa:</div>
      <div>{$form->getInput('name')->getView()}</div>
    </div>
    <div style = "padding-top:15px;padding-bottom:15px">
      <div style = "padding-bottom:5px;">Początek:</div>
      <div>{$form->getInput('begin')->getView()}</div>
    </div>
    <div style = "padding-top:15px;padding-bottom:15px;">
      <div style = "padding-bottom:5px;">Koniec:</div>
      <div>{$form->getInput('end')->getView()}</div>
    </div>
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

<form id = "{$form->getVar('name')}_moveUp" onsubmit = "go('moveVarUp','{$form->getVar('name')}_delete'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    {$form->getInput('submit_up')->getView()}
    {$form->getInput('id')->getView()}
  </div>
</form>


<form id = "{$form->getVar('name')}_moveDown" onsubmit = "go('moveVarDown','{$form->getVar('name')}_delete'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    {$form->getInput('submit_down')->getView()}
    {$form->getInput('id')->getView()}
  </div>
</form>
