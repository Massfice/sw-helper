<?php
/* Smarty version 3.1.33, created on 2019-10-29 00:18:18
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\inputs\text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7773ae8f667_04874014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ad81ca76c4bf5db6c944d924c53baf28611e8e' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\text.tpl',
      1 => 1572304670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db7773ae8f667_04874014 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="text" tabindex="1" name="<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
_<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" size="25" value="<?php echo $_smarty_tpl->tpl_vars['input']->value->getData()->getParam('input');?>
" class="inputbox autowidth">
<?php }
}
