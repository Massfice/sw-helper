<?php
/* Smarty version 3.1.33, created on 2019-10-25 18:46:33
  from 'L:\xampp\htdocs\SWHelper\app\views\containers\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db326e9b7ae14_21828361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb4ff9f2465c1dca0ebf6775bc8db03b2da4ef63' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\main.tpl',
      1 => 1572021990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db326e9b7ae14_21828361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8952248495db326e9b775e0_78906663', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17142141355db326e9b7a185_16680634', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_477547665db326e9b7a865_25247495', 'title');
?>

<?php }
/* {block 'up'} */
class Block_8952248495db326e9b775e0_78906663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_8952248495db326e9b775e0_78906663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="javascript:void(0);" onclick = "go('loginView');"><span>Dostęp</span></a></li>
<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_17142141355db326e9b7a185_16680634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_17142141355db326e9b7a185_16680634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_477547665db326e9b7a865_25247495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_477547665db326e9b7a865_25247495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Strona Główna
<?php
}
}
/* {/block 'title'} */
}
