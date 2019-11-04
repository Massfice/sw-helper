<?php
/* Smarty version 3.1.33, created on 2019-10-27 14:09:04
  from 'H:\xampp\htdocs\SWHelper\app\views\core\title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db596f0996300_98909797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52d0f8041d5f6fd7329224774a1650e5ad265dd8' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\title.tpl',
      1 => 1572008420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db596f0996300_98909797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16000927895db596f0994108_58743975', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16795462395db596f0994e97_10365925', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18503093835db596f09958a3_25105589', 'title');
?>

<?php }
/* {block 'up'} */
class Block_16000927895db596f0994108_58743975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_16000927895db596f0994108_58743975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_16795462395db596f0994e97_10365925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_16795462395db596f0994e97_10365925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_18503093835db596f09958a3_25105589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18503093835db596f09958a3_25105589',
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
