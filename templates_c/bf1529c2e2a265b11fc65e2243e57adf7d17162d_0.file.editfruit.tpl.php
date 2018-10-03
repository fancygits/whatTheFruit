<?php
/* Smarty version 3.1.30, created on 2018-02-28 14:45:20
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\editfruit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96b2707a3943_39774413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf1529c2e2a265b11fc65e2243e57adf7d17162d' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\editfruit.tpl',
      1 => 1519825507,
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
function content_5a96b2707a3943_39774413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
);" class="fruitbackground">
	<h2>Edit the fruit</h2>
	<p>Thanks for taking the time to better our fruit basket!</p>
	
	<form method="post" id="editfruitform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="update_fruit" >
		<input type="hidden" id="idfruitID" name="fruitID" value="<?php echo $_smarty_tpl->tpl_vars['fruitID']->value;?>
">
		<p>
			<label for="idName">*Name: </label>
			<input type="text" id="idName" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" required="required">
		</p>
		<p>
			<label for="idColor">*Available colors: </label>
			<input type="text" id="idColor" name="color" value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" required="required">
		</p>
		<p>
			<label></label><input type="submit" value="Update Fruit" id="idSubmit" class="button">
		</p>
	</form>
	<form action="index.php" id="deleteform" method="post">
		<input type="hidden" name="action" value="delete_fruit">
		<input type="hidden" name="fruit_id" value="<?php echo $_smarty_tpl->tpl_vars['fruitID']->value;?>
">
		<p>
		<label></label><input type="submit" value="Delete Fruit" id="idSubmitDelete" class="button">
			</p>
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
