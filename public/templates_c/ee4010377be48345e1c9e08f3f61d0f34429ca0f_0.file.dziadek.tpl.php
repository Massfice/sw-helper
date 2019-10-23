<?php
/* Smarty version 3.1.33, created on 2019-10-23 13:53:30
  from 'H:\xampp\htdocs\SWHelper\app\views\containers\dziadek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db03f3a1374f0_00446108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee4010377be48345e1c9e08f3f61d0f34429ca0f' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\dziadek.tpl',
      1 => 1571831562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db03f3a1374f0_00446108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11851542405db03f3a11fde9_04140822', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_332777105db03f3a133672_57074315', 'down');
?>

<?php }
/* {block 'up'} */
class Block_11851542405db03f3a11fde9_04140822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_11851542405db03f3a11fde9_04140822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  Dziadek Up
<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_332777105db03f3a133672_57074315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_332777105db03f3a133672_57074315',
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
