<?php
/* Smarty version 3.1.33, created on 2019-11-05 10:01:02
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\vars_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc13a4ea10435_38589832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '798b249ad0f23dfdadaf89f8acb437fa61af70f0' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\vars_form.tpl',
      1 => 1572943478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc13a4ea10435_38589832 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
" onsubmit = "go('createVar','<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
'); return false;">
  <div style = "display:inline;">
    Nazwa: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('name')->getView();?>
 Początek: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('begin')->getView();?>
 Koniec: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('end')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('submit')->getView();?>

  </div>
</form>
<?php }
}
