<?php
/* Smarty version 3.1.33, created on 2019-10-30 00:49:07
  from 'H:\xampp\htdocs\SWHelper\app\views\errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8cff39584a4_63205577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4953b156a631474f9f3cbad482e9d14c2ced51b3' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\errors.tpl',
      1 => 1572392944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db8cff39584a4_63205577 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
  <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>
      <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

  <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
