<?php
/* Smarty version 3.1.33, created on 2019-11-06 08:39:42
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\all_vars_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc278be44b4e2_37093849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7670c601a63d192dc10fb527c145f3858ac8c3c' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\all_vars_form.tpl',
      1 => 1573025964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc278be44b4e2_37093849 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_modify" onsubmit = "go('modifyVar','<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_modify'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    Nazwa: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('name')->getView();?>
 Początek: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('begin')->getView();?>
 Koniec: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('end')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('submit_modify')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('id')->getView();?>

  </div>
</form>

<form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_delete" onsubmit = "go('deleteVar','<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_delete'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('submit_delete')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('id')->getView();?>

  </div>
</form>
<?php }
}
