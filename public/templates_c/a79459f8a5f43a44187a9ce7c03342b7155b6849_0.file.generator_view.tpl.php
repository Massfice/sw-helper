<?php
/* Smarty version 3.1.33, created on 2019-11-07 18:22:17
  from 'H:\xampp\htdocs\SWHelper\app\views\generator_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc452c9ef8c23_58416095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a79459f8a5f43a44187a9ce7c03342b7155b6849' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\generator_view.tpl',
      1 => 1573147328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post_generator_result.tpl' => 1,
  ),
),false)) {
function content_5dc452c9ef8c23_58416095 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style = "padding-top:15px;padding-bottom:15px;">
<div style = "padding-bottom:5px;">Wzorzec</div>
<div><textarea name="pattern" class="inputbox" id="message" rows="15" cols="15" form = "post_generator_form"></textarea></div>
</div>

<div style = "padding-top:15px;padding-bottom:15px;" id = 'post_generator_result'>
<?php $_smarty_tpl->_subTemplateRender('file:post_generator_result.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div style = "padding-top:15px;padding-bottom:15px;">
<div style = "padding-bottom:5px;">Zmienne</div>
<div id = "generator_vars"></div>
</div>
<?php }
}
