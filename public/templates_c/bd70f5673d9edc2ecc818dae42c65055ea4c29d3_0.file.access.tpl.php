<?php
/* Smarty version 3.1.33, created on 2019-10-27 14:09:04
  from 'H:\xampp\htdocs\SWHelper\app\views\containers\access.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db596f0bdfde2_23250020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd70f5673d9edc2ecc818dae42c65055ea4c29d3' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\access.tpl',
      1 => 1572025716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db596f0bdfde2_23250020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2480588305db596f0bddc97_66893845', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7973939655db596f0bde948_84761942', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19766142185db596f0bdf284_82654069', 'title');
?>

<?php }
/* {block 'up'} */
class Block_2480588305db596f0bddc97_66893845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_2480588305db596f0bddc97_66893845',
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
class Block_7973939655db596f0bde948_84761942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_7973939655db596f0bde948_84761942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_19766142185db596f0bdf284_82654069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19766142185db596f0bdf284_82654069',
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
