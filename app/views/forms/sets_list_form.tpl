<form id = "{$form->getName()}" style = "display:inline;" onchange = "go('changeCurrentSet','{$form->getName()}');">

Zestawy: {$form->getInput('set_id')->getView()}

</form>
