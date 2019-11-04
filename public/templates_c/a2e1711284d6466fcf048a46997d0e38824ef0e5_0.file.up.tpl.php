<?php
/* Smarty version 3.1.33, created on 2019-10-27 14:09:04
  from 'H:\xampp\htdocs\SWHelper\app\views\core\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db596f03a10b0_64620510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e1711284d6466fcf048a46997d0e38824ef0e5' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\up.tpl',
      1 => 1572008396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db596f03a10b0_64620510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17917256495db596f037f0f7_26250279', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12389696665db596f039fdf4_65304943', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1681473485db596f03a0925_06897916', 'title');
?>

<?php }
/* {block 'up'} */
class Block_17917256495db596f037f0f7_26250279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_17917256495db596f037f0f7_26250279',
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
class Block_12389696665db596f039fdf4_65304943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_12389696665db596f039fdf4_65304943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_1681473485db596f03a0925_06897916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1681473485db596f03a0925_06897916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'title'} */
}
