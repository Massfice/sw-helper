<?php
/* Smarty version 3.1.33, created on 2019-10-30 00:38:45
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\register_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8cd8586b6a4_26190716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95c940fd8a541700fe72182dcbda7f035f1e1d63' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\register_form.tpl',
      1 => 1572392316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db8cd8586b6a4_26190716 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
" onsubmit = "go('register','<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
'); return false;">
  <div style = "display:inline;">
    Login: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('login')->getView();?>

    Hasło: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('password')->getView();?>

    Powtórz: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('repassword')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('submit')->getView();?>

  </div>
</form>
<?php }
}
