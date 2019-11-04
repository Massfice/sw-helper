<?php
/* Smarty version 3.1.33, created on 2019-11-02 22:31:58
  from 'L:\xampp\htdocs\SWHelper\app\views\forms\register_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbdf5ce4bc1f0_66293450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44638c1e33a1386c1c614425ce00adb9625f8dcb' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\register_form.tpl',
      1 => 1572392316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbdf5ce4bc1f0_66293450 (Smarty_Internal_Template $_smarty_tpl) {
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
