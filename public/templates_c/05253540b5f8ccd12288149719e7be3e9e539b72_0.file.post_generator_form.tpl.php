<?php
/* Smarty version 3.1.33, created on 2019-11-07 18:06:19
  from 'H:\xampp\htdocs\SWHelper\app\views\forms\post_generator_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc44f0b28dc36_96390904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05253540b5f8ccd12288149719e7be3e9e539b72' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\forms\\post_generator_form.tpl',
      1 => 1573146370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc44f0b28dc36_96390904 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
" onsubmit = "go('generatePost','<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
'); return false;">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value, 'input', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['input']->value) {
?>

  <?php if ($_smarty_tpl->tpl_vars['k']->value == 'submit') {?><div style = "padding-top:30px;"><?php echo $_smarty_tpl->tpl_vars['input']->value->getView();?>
</div><?php } else {
echo $_smarty_tpl->tpl_vars['input']->value->getView();
}?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</form>
<?php }
}
