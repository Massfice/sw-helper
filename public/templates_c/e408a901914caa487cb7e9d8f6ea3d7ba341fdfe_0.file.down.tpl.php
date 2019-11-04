<?php
/* Smarty version 3.1.33, created on 2019-10-25 14:04:01
  from 'L:\xampp\htdocs\SWHelper\app\views\core\down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db2e4b1ac3192_69418144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e408a901914caa487cb7e9d8f6ea3d7ba341fdfe' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\down.tpl',
      1 => 1572004788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db2e4b1ac3192_69418144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5957050465db2e4b1ac1b87_56071667', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13883907205db2e4b1ac2404_98188631', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4726419835db2e4b1ac2c88_85086320', 'title');
?>

<?php }
/* {block 'up'} */
class Block_5957050465db2e4b1ac1b87_56071667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_5957050465db2e4b1ac1b87_56071667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_13883907205db2e4b1ac2404_98188631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_13883907205db2e4b1ac2404_98188631',
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
/* {block 'title'} */
class Block_4726419835db2e4b1ac2c88_85086320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4726419835db2e4b1ac2c88_85086320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'title'} */
}
