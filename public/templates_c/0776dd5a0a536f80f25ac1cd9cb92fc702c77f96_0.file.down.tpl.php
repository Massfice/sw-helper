<?php
/* Smarty version 3.1.33, created on 2019-10-27 14:09:04
  from 'H:\xampp\htdocs\SWHelper\app\views\core\down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db596f078bdd3_88373963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0776dd5a0a536f80f25ac1cd9cb92fc702c77f96' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\down.tpl',
      1 => 1572008388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db596f078bdd3_88373963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4636906015db596f0789b07_21004039', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17702291705db596f078a8f3_91226553', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16757752855db596f078b638_98848303', 'title');
?>

<?php }
/* {block 'up'} */
class Block_4636906015db596f0789b07_21004039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_4636906015db596f0789b07_21004039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_17702291705db596f078a8f3_91226553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_17702291705db596f078a8f3_91226553',
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
class Block_16757752855db596f078b638_98848303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16757752855db596f078b638_98848303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'title'} */
}
