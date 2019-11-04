<?php
/* Smarty version 3.1.33, created on 2019-11-02 22:31:51
  from 'L:\xampp\htdocs\SWHelper\app\views\forms\inputs\text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbdf5c7aa9c55_93799180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7afe54a0ff7bd0ab5aa685c00e80f279f3c4d1e5' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\text.tpl',
      1 => 1572304670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbdf5c7aa9c55_93799180 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="text" tabindex="1" name="<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
_<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" size="25" value="<?php echo $_smarty_tpl->tpl_vars['input']->value->getData()->getParam('input');?>
" class="inputbox autowidth">
<?php }
}
