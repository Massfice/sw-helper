<?php
/* Smarty version 3.1.33, created on 2019-11-03 23:52:23
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbf5a2756a981_11803111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7319c588192460a36ddae4e523af7bdb607de9f9' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\login_form.tpl',
      1 => 1572821540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbf5a2756a981_11803111 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
" onsubmit = "go('login','<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
'); return false;">
  <div style = "display:inline;">
    Login: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('login')->getView();?>

    Hasło: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('password')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('submit')->getView();?>

  </div>
</form>
<?php }
}
