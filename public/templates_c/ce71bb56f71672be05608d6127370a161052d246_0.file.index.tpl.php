<?php
/* Smarty version 3.1.33, created on 2019-11-02 22:30:59
  from 'L:\xampp\htdocs\SWHelper\app\views\core\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbdf593698786_08467130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce71bb56f71672be05608d6127370a161052d246' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\index.tpl',
      1 => 1572300762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbdf593698786_08467130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>

  <head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6668916185dbdf593681cf1_43799558', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8333726765dbdf593697014_67692258', 'extras');
?>

  </head>

  <body <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7300103965dbdf5936976f9_33625525', 'body-config');
?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_237062635dbdf593697cd5_20249761', 'body');
?>

  </body>
</html>
<?php }
/* {block 'title'} */
class Block_6668916185dbdf593681cf1_43799558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6668916185dbdf593681cf1_43799558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'extras'} */
class Block_8333726765dbdf593697014_67692258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extras' => 
  array (
    0 => 'Block_8333726765dbdf593697014_67692258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extras'} */
/* {block 'body-config'} */
class Block_7300103965dbdf5936976f9_33625525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-config' => 
  array (
    0 => 'Block_7300103965dbdf5936976f9_33625525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body-config'} */
/* {block 'body'} */
class Block_237062635dbdf593697cd5_20249761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_237062635dbdf593697cd5_20249761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
