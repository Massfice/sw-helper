<?php
/* Smarty version 3.1.33, created on 2019-10-27 02:00:02
  from 'L:\xampp\htdocs\SWHelper\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db4de02228201_84906172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8e8a90b83bdae74a6215c8e5e0a64c4279de3df' => 
    array (
      0 => 'L:\\xampp\\htdocs\\SWHelper\\app\\views\\index.tpl',
      1 => 1572134402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db4de02228201_84906172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7293599615db4de0221f733_41872326', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15975239665db4de02220883_79193262', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20455156065db4de02221827_57503740', 'extras');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6355092715db4de02227b81_44857702', 'body-config');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'core\index.tpl');
}
/* {block 'title'} */
class Block_7293599615db4de0221f733_41872326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7293599615db4de0221f733_41872326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
SWHelper<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_15975239665db4de02220883_79193262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15975239665db4de02220883_79193262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id = "wrap">
	<div class="logoglowna">
		<div style="padding-top:80px;">
			<h1></h1>
			<br><span class="opisglowna"></span>
		</div>
	</div>
	<div id="cssmenu">
		<ul id = "up_0">


		</ul>
	</div>

	<div class="forumbg">
		<div class="inner"><span class="corners-top"><span></span></span>
			<table class="table1" cellspacing="1">
				<thead>
					<tr>
						<th style="text-align:left;" id = "container_title">
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg3">
						<td>
		</div>

						<fieldset style="border: 2px solid #a29b9b; border-radius: 6px; padding: 4px 10px 12px; width: 90%;" class = "mymenu">
							<legend style="color: #FFF; font: italic bold 14px/24px Verdana,Helvetica,Arial,sans-serif;padding: 0px 8px;">
								<ul id = "up_1">
								</ul>
							</legend>
							<fieldset style="border: 2px solid #a29b9b; border-radius: 6px; padding: 4px 10px 12px; width: 90%;">
								<legend style="color: #FFF; font: italic bold 14px/24px Verdana,Helvetica,Arial,sans-serif;padding: 0px 8px;">
									<ul id = "up_2">
									</ul>
								</legend>
 							<div id = 'content'></div>
						</fieldset>
					</fieldset>

				</td>
			</tr>
		</tbody>
	</table>

	<span class="corners-bottom"><span></span></span></div>
	</div>

<?php
}
}
/* {/block 'body'} */
/* {block 'extras'} */
class Block_20455156065db4de02221827_57503740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extras' => 
  array (
    0 => 'Block_20455156065db4de02221827_57503740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<link href="http://shinobi-war.xaa.pl/styles/WoWWarlords/theme/print.css" rel="stylesheet" type="text/css" media="print" title="printonly" />
<link href="http://shinobi-war.xaa.pl/style.php?id=3&lang=pl" rel="stylesheet" type="text/css" media="screen, projection" />

<link href="http://shinobi-war.xaa.pl/styles/WoWWarlords/theme/normal.css" rel="stylesheet" type="text/css" title="A" />
<link href="http://shinobi-war.xaa.pl/styles/WoWWarlords/theme/medium.css" rel="alternate stylesheet" type="text/css" title="A+" />
<link href="http://shinobi-war.xaa.pl/styles/WoWWarlords/theme/large.css" rel="alternate stylesheet" type="text/css" title="A++" />

<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
css/style.css?v=3" rel="stylesheet" type="text/css" media="all"/>

<?php
}
}
/* {/block 'extras'} */
/* {block 'body-config'} */
class Block_6355092715db4de02227b81_44857702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-config' => 
  array (
    0 => 'Block_6355092715db4de02227b81_44857702',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
id="phpbb" class="section-index ltr"<?php
}
}
/* {/block 'body-config'} */
}
