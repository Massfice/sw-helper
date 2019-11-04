<?php
/* Smarty version 3.1.33, created on 2019-11-02 22:31:51
  from 'L:\xampp\htdocs\SWHelper\app\views\forms\login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbdf5c793dae7_10947627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f4fc85859fa217e7496e0610f89af9f715a655a' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\login_form.tpl',
      1 => 1572304696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbdf5c793dae7_10947627 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
" onsubmit = "go('hello','<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
'); return false;">
  <div style = "display:inline;">
    Login: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('login')->getView();?>

    Hasło: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('password')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('submit')->getView();?>

  </div>
</form>
<?php }
}
