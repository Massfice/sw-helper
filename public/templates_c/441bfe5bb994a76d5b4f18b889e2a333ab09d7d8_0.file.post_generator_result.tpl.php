<?php
/* Smarty version 3.1.33, created on 2019-11-07 18:22:51
  from 'H:\xampp\htdocs\SWHelper\app\views\post_generator_result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc452eb7954d7_91972430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '441bfe5bb994a76d5b4f18b889e2a333ab09d7d8' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\post_generator_result.tpl',
      1 => 1573147368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc452eb7954d7_91972430 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style = "padding-bottom:5px;">Wynik</div>
<div><textarea class="inputbox" id="post_generator_result" rows="15" cols="15" readonly=""><?php if (isset($_smarty_tpl->tpl_vars['post_generator_result']->value)) {
echo $_smarty_tpl->tpl_vars['post_generator_result']->value;
}?></textarea></div>
<?php }
}
