<?php
/* Smarty version 3.1.33, created on 2019-11-06 10:03:53
  from 'H:\xampp\htdocs\SWHelper\app\views\containers\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc28c79eb9674_82118618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2b0ad51ced75178cafdc166cd714151abbe8d7a' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\containers\\home.tpl',
      1 => 1573031032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc28c79eb9674_82118618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21271393945dc28c79eb3588_19211662', 'up');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9692672865dc28c79eb8464_28082089', 'down');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5783682765dc28c79eb8ea7_46943114', 'title');
?>

<?php }
/* {block 'up'} */
class Block_21271393945dc28c79eb3588_19211662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'up' => 
  array (
    0 => 'Block_21271393945dc28c79eb3588_19211662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="javascript:void(0);" onclick = "go('hello_user');"><span>Kokpit</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('setsView');"><span>Generator Postów</span></a></li>
<?php
}
}
/* {/block 'up'} */
/* {block 'down'} */
class Block_9692672865dc28c79eb8464_28082089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'down' => 
  array (
    0 => 'Block_9692672865dc28c79eb8464_28082089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'down'} */
/* {block 'title'} */
class Block_5783682765dc28c79eb8ea7_46943114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5783682765dc28c79eb8ea7_46943114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Kokpit
<?php
}
}
/* {/block 'title'} */
}
