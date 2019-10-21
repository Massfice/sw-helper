<?php
/* Smarty version 3.1.33, created on 2019-10-21 09:35:48
  from 'H:\xampp\htdocs\SWHelper\app\views\core\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dad5fd4d89c92_61903316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a9856ca7602e62eb139d515f10019bc9700b21' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWHelper\\app\\views\\core\\index.tpl',
      1 => 1571643274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad5fd4d89c92_61903316 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

  <head>
    <title>SW Helper</title>

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
js/ajax-engine.js"><?php echo '</script'; ?>
>
  </head>

  <body>
    <div id = "body"></div>
  </body>
</html>
<?php }
}
