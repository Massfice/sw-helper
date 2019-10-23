<?php
/* Smarty version 3.1.33, created on 2019-10-23 13:54:22
  from 'H:\xampp\htdocs\SWHelper\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db03f6e0cb369_33859863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f385a1d684d4958ae97c16bd6203e243e306b8da' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\index.tpl',
      1 => 1571831648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db03f6e0cb369_33859863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20685064945db03f6e0bf7e9_83179543', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3892415615db03f6e0c3668_38568788', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12483719355db03f6e0c74e0_56420460', 'extras');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'core\index.tpl');
}
/* {block 'title'} */
class Block_20685064945db03f6e0bf7e9_83179543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20685064945db03f6e0bf7e9_83179543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
SWHelper<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_3892415615db03f6e0c3668_38568788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3892415615db03f6e0c3668_38568788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id = "up_0"></div>

  <div id = "up_1"></div>

  <div id = "up_2"></div>

  <div id = "content"></div>

  <div id = "down_2"></div>

  <div id = "down_1"></div>

  <div id = "down_0"></div>
<?php
}
}
/* {/block 'body'} */
/* {block 'extras'} */
class Block_12483719355db03f6e0c74e0_56420460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extras' => 
  array (
    0 => 'Block_12483719355db03f6e0c74e0_56420460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php
}
}
/* {/block 'extras'} */
}
