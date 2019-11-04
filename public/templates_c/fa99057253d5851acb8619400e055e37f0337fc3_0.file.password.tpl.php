<?php
/* Smarty version 3.1.33, created on 2019-10-27 02:01:02
  from 'L:\xampp\htdocs\SWHelper\app\views\forms\inputs\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db4de3e07f9e4_74217947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa99057253d5851acb8619400e055e37f0337fc3' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\password.tpl',
      1 => 1572134458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db4de3e07f9e4_74217947 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="password" tabindex="2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
_<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" size="25" value ="<?php echo $_smarty_tpl->tpl_vars['input']->value->getData()->getParam('input');?>
" class="inputbox autowidth">
<?php }
}
