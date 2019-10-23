<?php
/* Smarty version 3.1.33, created on 2019-10-23 13:52:56
  from 'H:\xampp\htdocs\SWHelper\app\views\containers\babcia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db03f1846e460_45594400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b3887c3f2d399157c665d42ff1efe2da8fd461b' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\babcia.tpl',
      1 => 1571831554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db03f1846e460_45594400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19157863285db03f18466762_53714175', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13102477215db03f1846a5e2_93626754', 'down');
?>

<?php }
/* {block 'up'} */
class Block_19157863285db03f18466762_53714175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_19157863285db03f18466762_53714175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  Babcia Up
<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_13102477215db03f1846a5e2_93626754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_13102477215db03f1846a5e2_93626754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  Babcia Down
<?php
}
}
/* {/block 'down'} */
}
