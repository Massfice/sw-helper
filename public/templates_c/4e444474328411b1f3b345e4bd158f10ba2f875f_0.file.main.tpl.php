<?php
/* Smarty version 3.1.33, created on 2019-10-23 13:53:18
  from 'H:\xampp\htdocs\SWHelper\app\views\containers\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db03f2eeb7175_72936829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e444474328411b1f3b345e4bd158f10ba2f875f' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\main.tpl',
      1 => 1571831598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db03f2eeb7175_72936829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13264126835db03f2eea7770_32210268', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53320855db03f2eeb32f4_01546985', 'down');
?>

<?php }
/* {block 'up'} */
class Block_13264126835db03f2eea7770_32210268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_13264126835db03f2eea7770_32210268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a href = "javascript:void(0);" onclick = "go('hello2');">Babcia</a> |
  <a href = "javascript:void(0);" onclick = "go('hello');">Ojciec</a> |
  <span id = "toggle"></span>
<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_53320855db03f2eeb32f4_01546985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_53320855db03f2eeb32f4_01546985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
}
