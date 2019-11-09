<?php
/* Smarty version 3.1.33, created on 2019-11-08 00:32:59
  from 'H:\xampp\htdocs\SWHelper\app\views\containers\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc4a9aba58cb1_90553282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e444474328411b1f3b345e4bd158f10ba2f875f' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\main.tpl',
      1 => 1573169576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc4a9aba58cb1_90553282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16800129145dc4a9aba2e9a6_34232838', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12019134875dc4a9aba51c32_34512999', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17913528345dc4a9aba556c0_49377438', 'title');
?>

<?php }
/* {block 'up'} */
class Block_16800129145dc4a9aba2e9a6_34232838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_16800129145dc4a9aba2e9a6_34232838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="javascript:void(0);" onclick = "go('hello_guest');"><span>Strona Główna</span></a></li>
<?php if (isset($_smarty_tpl->tpl_vars['conf']->value->roles['guest'])) {?><li><a href="javascript:void(0);" onclick = "go('loginView');"><span>Dostęp</span></a></li><?php }
if (isset($_smarty_tpl->tpl_vars['conf']->value->roles['user'])) {?>
<li><a href="javascript:void(0);" onclick = "go('hello_user');"><span>Kokpit</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('addTestSpecial');"><span>Dodaj testową zmienną specjalną</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('clearCurrentSpecial');"><span>Wyczyść zmienne specjalne</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('logout');"><span>Wyloguj [ <?php echo $_smarty_tpl->tpl_vars['user']->value->getLogin();?>
 ]</span></a></li>
<?php }
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_12019134875dc4a9aba51c32_34512999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_12019134875dc4a9aba51c32_34512999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_17913528345dc4a9aba556c0_49377438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17913528345dc4a9aba556c0_49377438',
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
