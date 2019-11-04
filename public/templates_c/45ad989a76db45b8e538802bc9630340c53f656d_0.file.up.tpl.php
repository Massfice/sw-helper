<?php
/* Smarty version 3.1.33, created on 2019-10-25 14:04:01
  from 'L:\xampp\htdocs\SWHelper\app\views\core\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db2e4b1872f49_97530733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ad989a76db45b8e538802bc9630340c53f656d' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\up.tpl',
      1 => 1572004796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db2e4b1872f49_97530733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3677379255db2e4b186e914_87656830', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9839339905db2e4b1872354_02978800', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5005557355db2e4b1872a39_75036062', 'title');
?>

<?php }
/* {block 'up'} */
class Block_3677379255db2e4b186e914_87656830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_3677379255db2e4b186e914_87656830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_9839339905db2e4b1872354_02978800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_9839339905db2e4b1872354_02978800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_5005557355db2e4b1872a39_75036062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5005557355db2e4b1872a39_75036062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'title'} */
}
