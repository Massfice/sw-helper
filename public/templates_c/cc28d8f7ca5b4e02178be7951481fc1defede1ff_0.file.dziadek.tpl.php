<?php
/* Smarty version 3.1.33, created on 2019-10-25 13:44:16
  from 'L:\xampp\htdocs\SWHelper\app\views\containers\dziadek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db2e01016fcf2_42857352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc28d8f7ca5b4e02178be7951481fc1defede1ff' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\dziadek.tpl',
      1 => 1572003850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db2e01016fcf2_42857352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5415624455db2e01016cce7_97631904', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11520119345db2e01016f6d3_88092148', 'down');
?>

<?php }
/* {block 'up'} */
class Block_5415624455db2e01016cce7_97631904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_5415624455db2e01016cce7_97631904',
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
class Block_11520119345db2e01016f6d3_88092148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_11520119345db2e01016f6d3_88092148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  Dziadek Down
<?php
}
}
/* {/block 'down'} */
}
