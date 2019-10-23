<?php
/* Smarty version 3.1.33, created on 2019-10-23 11:46:00
  from 'H:\xampp\htdocs\SWHelper\app\views\core\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db021587ca977_02726649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e1711284d6466fcf048a46997d0e38824ef0e5' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\up.tpl',
      1 => 1571823806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db021587ca977_02726649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16849562495db02158797cf8_33063900', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8078573145db021587c6af0_13314724', 'down');
?>

<?php }
/* {block 'up'} */
class Block_16849562495db02158797cf8_33063900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_16849562495db02158797cf8_33063900',
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
class Block_8078573145db021587c6af0_13314724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_8078573145db021587c6af0_13314724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
}
