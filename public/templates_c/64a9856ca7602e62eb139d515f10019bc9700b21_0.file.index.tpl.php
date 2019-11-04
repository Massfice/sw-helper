<?php
/* Smarty version 3.1.33, created on 2019-10-28 23:12:44
  from 'H:\xampp\htdocs\SWHelper\app\views\core\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db767dc120968_38409877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a9856ca7602e62eb139d515f10019bc9700b21' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\index.tpl',
      1 => 1572300762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db767dc120968_38409877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>

  <head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5101610685db767dc1077e5_25711075', 'title');
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
js/ajax-engine.js?v=3"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20356450005db767dc11c8f1_69919724', 'extras');
?>

  </head>

  <body <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8565407905db767dc11e4a7_94486580', 'body-config');
?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19956254505db767dc11f8f4_62414508', 'body');
?>

  </body>
</html>
<?php }
/* {block 'title'} */
class Block_5101610685db767dc1077e5_25711075 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5101610685db767dc1077e5_25711075',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'extras'} */
class Block_20356450005db767dc11c8f1_69919724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extras' => 
  array (
    0 => 'Block_20356450005db767dc11c8f1_69919724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extras'} */
/* {block 'body-config'} */
class Block_8565407905db767dc11e4a7_94486580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-config' => 
  array (
    0 => 'Block_8565407905db767dc11e4a7_94486580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body-config'} */
/* {block 'body'} */
class Block_19956254505db767dc11f8f4_62414508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19956254505db767dc11f8f4_62414508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
