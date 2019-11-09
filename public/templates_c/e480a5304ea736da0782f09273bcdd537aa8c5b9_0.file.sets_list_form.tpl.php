<?php
/* Smarty version 3.1.33, created on 2019-11-06 03:41:47
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\sets_list_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc232eb91bf59_01467464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e480a5304ea736da0782f09273bcdd537aa8c5b9' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\sets_list_form.tpl',
      1 => 1573008104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc232eb91bf59_01467464 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
" style = "display:inline;" onchange = "go('changeCurrentSet','<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
');">

Zestawy: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('set_id')->getView();?>


</form>
<?php }
}
