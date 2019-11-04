<?php
/* Smarty version 3.1.33, created on 2019-10-27 14:09:03
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\inputs\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db596efe8c096_53346087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae7bae651c43086d6956509e97395e69da9d8ef3' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\password.tpl',
      1 => 1572138058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db596efe8c096_53346087 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="password" tabindex="2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
_<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" size="25" value ="<?php echo $_smarty_tpl->tpl_vars['input']->value->getData()->getParam('input');?>
" class="inputbox autowidth">
<?php }
}
