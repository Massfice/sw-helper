<?php
/* Smarty version 3.1.33, created on 2019-11-06 10:58:52
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\inputs\textarea_titled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc2995ce62692_04838069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a0f16ec3322932fddd7c8092aeecd7b5770e8b' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\textarea_titled.tpl',
      1 => 1573034330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc2995ce62692_04838069 (Smarty_Internal_Template $_smarty_tpl) {
?><div style = "padding-top:15px;padding-bottom:15px;">

<div style = "padding-bottom:5px;"><?php echo $_smarty_tpl->tpl_vars['input']->value->getText();?>
</div>
<div><textarea name="<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" class="inputbox" id="message" rows="15" cols="15" form = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['input']->value->getDefaultValue();?>
</textarea><div>

</div>
<?php }
}
