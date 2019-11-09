<?php
/* Smarty version 3.1.33, created on 2019-11-05 09:28:06
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\sets_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc13296d92fa6_26033067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf0f1e0cfc885ddd94218b32bc0819ded23cfe7c' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\sets_form.tpl',
      1 => 1572942484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc13296d92fa6_26033067 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
" onsubmit = "go('createSet','<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
'); return false;">
  <div style = "display:inline;">
    Nazwa: <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('name')->getView();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->getInput('submit')->getView();?>

  </div>
</form>
<?php }
}
