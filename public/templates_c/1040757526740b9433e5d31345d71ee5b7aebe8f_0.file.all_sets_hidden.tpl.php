<?php
/* Smarty version 3.1.33, created on 2019-11-06 00:05:18
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\inputs\all_sets_hidden.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc2002e725fd6_91788389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1040757526740b9433e5d31345d71ee5b7aebe8f' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\all_sets_hidden.tpl',
      1 => 1572992326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc2002e725fd6_91788389 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" tabindex="1" name="<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" size="25" value="<?php echo $_smarty_tpl->tpl_vars['input']->value->getDefaultValue();?>
" class="inputbox autowidth">
<?php }
}
