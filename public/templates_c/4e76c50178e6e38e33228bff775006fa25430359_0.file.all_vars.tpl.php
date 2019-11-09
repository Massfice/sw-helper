<?php
/* Smarty version 3.1.33, created on 2019-11-06 08:23:50
  from 'H:\xampp\htdocs\SWHelper\app\views\all_vars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc2750644ada2_34025491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e76c50178e6e38e33228bff775006fa25430359' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\all_vars.tpl',
      1 => 1573025028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc2750644ada2_34025491 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['all_vars']->value) && is_array($_smarty_tpl->tpl_vars['all_vars']->value)) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_vars']->value, 'var');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
?>
<div><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
}
