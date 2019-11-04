<?php
/* Smarty version 3.1.33, created on 2019-10-25 14:04:01
  from 'L:\xampp\htdocs\SWHelper\app\views\core\title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db2e4b1ccffc5_57389217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6624bb10460a6a4e7c8b70cf88d17e8181d1b216' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\title.tpl',
      1 => 1572004820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db2e4b1ccffc5_57389217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14933568735db2e4b1cce3f5_70539105', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8848509315db2e4b1ccedc2_14170876', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17505533165db2e4b1ccf552_26763407', 'title');
?>

<?php }
/* {block 'up'} */
class Block_14933568735db2e4b1cce3f5_70539105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_14933568735db2e4b1cce3f5_70539105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_8848509315db2e4b1ccedc2_14170876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_8848509315db2e4b1ccedc2_14170876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_17505533165db2e4b1ccf552_26763407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17505533165db2e4b1ccf552_26763407',
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
/* {/block 'title'} */
}
