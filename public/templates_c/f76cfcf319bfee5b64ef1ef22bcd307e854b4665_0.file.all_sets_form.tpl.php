<?php
/* Smarty version 3.1.33, created on 2019-11-06 06:25:46
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\all_sets_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc2595a770d74_11589744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f76cfcf319bfee5b64ef1ef22bcd307e854b4665' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\all_sets_form.tpl',
      1 => 1573017898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc2595a770d74_11589744 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_modify" onsubmit = "go('modifySet','<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_modify'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    Zestaw: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('name')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('submit_modify')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('id')->getView();?>

  </div>
</form>

<form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_delete" onsubmit = "go('deleteSet','<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_delete'); return false;" style = "display:inline;">
  <div style = "display:inline;">
    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('submit_delete')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('id')->getView();?>

  </div>
</form>
<?php }
}
