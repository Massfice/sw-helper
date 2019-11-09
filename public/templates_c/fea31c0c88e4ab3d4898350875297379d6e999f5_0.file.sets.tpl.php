<?php
/* Smarty version 3.1.33, created on 2019-11-06 10:04:37
  from 'H:\xampp\htdocs\SWHelper\app\views\containers\sets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc28ca5069263_87266325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fea31c0c88e4ab3d4898350875297379d6e999f5' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\sets.tpl',
      1 => 1573031070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc28ca5069263_87266325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3699972365dc28ca505cdd5_77059995', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5265949565dc28ca5068101_46826233', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15926734035dc28ca5068ac8_50184235', 'title');
?>

<?php }
/* {block 'up'} */
class Block_3699972365dc28ca505cdd5_77059995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_3699972365dc28ca505cdd5_77059995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="javascript:void(0);" onclick = "go('setsView');"><span>Zestawy zmiennych</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('varsView');"><span>Zmienne</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('generatorView');"><span>Generator</span></a></li>
<?php if (isset($_smarty_tpl->tpl_vars['sets_list_form']->value)) {
echo $_smarty_tpl->tpl_vars['sets_list_form']->value;
}
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_5265949565dc28ca5068101_46826233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_5265949565dc28ca5068101_46826233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_15926734035dc28ca5068ac8_50184235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15926734035dc28ca5068ac8_50184235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Generator Postów
<?php
}
}
/* {/block 'title'} */
}
