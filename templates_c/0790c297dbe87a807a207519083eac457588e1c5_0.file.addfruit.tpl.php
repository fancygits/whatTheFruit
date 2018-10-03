<?php
/* Smarty version 3.1.30, created on 2018-02-28 14:43:31
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\addfruit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96b2036649c3_31921492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0790c297dbe87a807a207519083eac457588e1c5' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\addfruit.tpl',
      1 => 1519825373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:shared/header.tpl' => 1,
    'file:shared/nav.tpl' => 1,
    'file:shared/footer.tpl' => 1,
  ),
),false)) {
function content_5a96b2036649c3_31921492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main style="background-image: url('./model/images/default_fruit_large.png');" class="fruitbackground">
	<h2>Add a fruit to the basket</h2>
	<form method="post" id="addfruitform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="add_fruit" >
		<p>
			<label for="idFruitName">* Fruit Name: </label>
			<input type="text" id="idFruitName" name="fruitName" required="required">
		</p>
		<p>
			<label for="idColors">* Possible Colors: </label>
			<input type="text" id="idColors" name="color" required="required">
		</p>
		<p>
			<input type="submit" value="Submit Fruit" id="idSubmit" class="button">
		</p>
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
