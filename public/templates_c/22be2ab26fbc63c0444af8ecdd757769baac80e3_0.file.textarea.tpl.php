<?php
/* Smarty version 3.1.33, created on 2019-11-09 01:15:39
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\inputs\textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc6052bd20d43_44669383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22be2ab26fbc63c0444af8ecdd757769baac80e3' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\textarea.tpl',
      1 => 1573258538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc6052bd20d43_44669383 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea name="<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" class="inputbox" id="message" rows="15" cols="15" form = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
" style = "width:20%;height:20%"><?php echo $_smarty_tpl->tpl_vars['input']->value->getDefaultValue();?>
</textarea>
<?php }
}
