<?php
/* Smarty version 3.1.33, created on 2019-11-09 01:16:01
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\inputs\all_sets_textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc6054124e0e0_43460474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33779b29c401246e7ab9c879c61e9a67a65fb358' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\all_sets_textarea.tpl',
      1 => 1573258560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc6054124e0e0_43460474 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea name="<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" class="inputbox" rows="15" cols="15" form = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getVar('name');?>
_modify"><?php echo $_smarty_tpl->tpl_vars['input']->value->getDefaultValue();?>
</textarea>
<?php }
}
