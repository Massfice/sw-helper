<?php
/* Smarty version 3.1.33, created on 2019-11-06 02:28:03
  from 'H:\xampp\htdocs\SWHelper\app\views\sets_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc221a3ec4464_86443661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df0ca99ae7157cb595a44de315ea3ebdcda1fa4f' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\sets_view.tpl',
      1 => 1573003682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc221a3ec4464_86443661 (Smarty_Internal_Template $_smarty_tpl) {
?><div style = "padding-bottom:15px; padding-top:15px;"><?php echo $_smarty_tpl->tpl_vars['sets_form']->value;?>
</div>
<div>

  <?php if (isset($_smarty_tpl->tpl_vars['all_sets']->value) && is_array($_smarty_tpl->tpl_vars['all_sets']->value)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_sets']->value, 'set');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['set']->value) {
?>
    <div style = "padding-top:5px;padding-bottom:5px;"><?php echo $_smarty_tpl->tpl_vars['set']->value;?>
</div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>

</div>
<?php }
}
