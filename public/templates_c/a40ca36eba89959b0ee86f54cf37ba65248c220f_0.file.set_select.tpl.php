<?php
/* Smarty version 3.1.33, created on 2019-11-06 02:09:22
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\inputs\set_select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc21d42495d03_88552357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a40ca36eba89959b0ee86f54cf37ba65248c220f' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\inputs\\set_select.tpl',
      1 => 1573001882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc21d42495d03_88552357 (Smarty_Internal_Template $_smarty_tpl) {
?><select name = "<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
" form ="<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
_<?php echo $_smarty_tpl->tpl_vars['input']->value->getName();?>
">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php }
}
