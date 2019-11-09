<?php
/* Smarty version 3.1.33, created on 2019-11-06 03:11:46
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\inputs\option.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc22be28fa1f8_70298222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e101d2b9f7a088f6303c9385d2b2578c990a19ec' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\option.tpl',
      1 => 1573006304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc22be28fa1f8_70298222 (Smarty_Internal_Template $_smarty_tpl) {
?><option value = "<?php echo $_smarty_tpl->tpl_vars['option']->value->getValue();?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value->getSelected()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value->getText();?>
</option>
<?php }
}
