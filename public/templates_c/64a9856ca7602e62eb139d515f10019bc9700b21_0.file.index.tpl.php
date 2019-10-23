<?php
/* Smarty version 3.1.33, created on 2019-10-23 13:49:13
  from 'H:\xampp\htdocs\SWHelper\app\views\core\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db03e3970a129_86306710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a9856ca7602e62eb139d515f10019bc9700b21' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\index.tpl',
      1 => 1571831324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db03e3970a129_86306710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>

  <head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9178346815db03e396ead10_46698874', 'title');
?>
</title>

    <?php echo '<script'; ?>
>
      var aroot = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
";
      var start_action = "<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
";
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
js/ajax-engine.js?v=2"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3475748525db03e39702415_71153406', 'extras');
?>

  </head>

  <body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14368884235db03e397062a0_81413322', 'body');
?>

  </body>
</html>
<?php }
/* {block 'title'} */
class Block_9178346815db03e396ead10_46698874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9178346815db03e396ead10_46698874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'extras'} */
class Block_3475748525db03e39702415_71153406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extras' => 
  array (
    0 => 'Block_3475748525db03e39702415_71153406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extras'} */
/* {block 'body'} */
class Block_14368884235db03e397062a0_81413322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14368884235db03e397062a0_81413322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
