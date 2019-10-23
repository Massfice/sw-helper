<?php
/* Smarty version 3.1.33, created on 2019-10-23 11:46:00
  from 'H:\xampp\htdocs\SWHelper\app\views\core\down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db02158c62711_90981069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0776dd5a0a536f80f25ac1cd9cb92fc702c77f96' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\down.tpl',
      1 => 1571823810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db02158c62711_90981069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15559182485db02158c5aa12_38375002', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10803982925db02158c5e897_96187078', 'down');
?>

<?php }
/* {block 'up'} */
class Block_15559182485db02158c5aa12_38375002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_15559182485db02158c5aa12_38375002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_10803982925db02158c5e897_96187078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_10803982925db02158c5e897_96187078',
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
/* {/block 'down'} */
}
