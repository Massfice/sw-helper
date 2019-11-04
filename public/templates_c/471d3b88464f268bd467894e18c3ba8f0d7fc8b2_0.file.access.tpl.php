<?php
/* Smarty version 3.1.33, created on 2019-10-25 18:49:10
  from 'L:\xampp\htdocs\SWHelper\app\views\containers\access.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db32786dfc255_95028328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '471d3b88464f268bd467894e18c3ba8f0d7fc8b2' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\access.tpl',
      1 => 1572022116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db32786dfc255_95028328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8185328175db32786de1b10_57340302', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14684426815db32786de45c9_21339770', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16346589025db32786de4d35_00750709', 'title');
?>

<?php }
/* {block 'up'} */
class Block_8185328175db32786de1b10_57340302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_8185328175db32786de1b10_57340302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="javascript:void(0);" onclick = "go('loginView');"><span>Logowanie</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('registerView');"><span>Rejestracja</span></a></li>
<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_14684426815db32786de45c9_21339770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_14684426815db32786de45c9_21339770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_16346589025db32786de4d35_00750709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16346589025db32786de4d35_00750709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<?php
}
}
/* {/block 'title'} */
}
