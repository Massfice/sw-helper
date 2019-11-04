<?php
/* Smarty version 3.1.33, created on 2019-10-25 14:05:49
  from 'L:\xampp\htdocs\SWHelper\app\views\containers\babcia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db2e51d4acd59_07083423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1e44bed54f0dffc83474ea9d9153387daa82ec6' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\babcia.tpl',
      1 => 1572005146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db2e51d4acd59_07083423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8748011435db2e51d4a9868_60005344', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10714232595db2e51d4ac133_14572219', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15580229405db2e51d4ac7f6_78344185', 'title');
?>

<?php }
/* {block 'up'} */
class Block_8748011435db2e51d4a9868_60005344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_8748011435db2e51d4a9868_60005344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="javascript:void(0);">Abrakadabra</a></li>
<li><a href="javascript:void(0);">Abrakadabra</a></li>
<li><a href="javascript:void(0);">Abrakadabra</a></li>
<li><a href="javascript:void(0);">Abrakadabra</a></li>
<li><a href="http://google.com" target = "_blank">Google</a></li>
<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_10714232595db2e51d4ac133_14572219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_10714232595db2e51d4ac133_14572219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  Babcia Down
<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_15580229405db2e51d4ac7f6_78344185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15580229405db2e51d4ac7f6_78344185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  Jestem babcią.
<?php
}
}
/* {/block 'title'} */
}
