<?php
/* Smarty version 3.1.30, created on 2018-02-28 15:03:06
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96b69a718728_48880324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a02cc9efc01cc2dc64d4bf86fcd9fc4f487f379' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\contact.tpl',
      1 => 1519824999,
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
function content_5a96b69a718728_48880324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Contact Us</h2>
	<form method="post" id="contactform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="process_contact_form" >
		<p>
			<label for="idName">* Name: </label>
			<input type="text" id="idName" name="name" required="required">
		</p>
		<p>
			<label for="idEmail">* E-mail: </label>
			<input type="email" id="idEmail" name="email" required="required">
		</p>
		<p>
			<label for="idPhone">Phone: </label>
			<input type="tel" id="idPhone" name="phone">
		</p>
		<p>
			<label for="idDate">Date: </label>
			<input type="date" id="idDate" name="messageDate">
		</p>
		<p>
			<label for="idComments">* Comments: </label>
			<textarea id="myComments" name="comments" rows="5" cols="40" required="required"></textarea>
		</p>
		<p>
			<label></label><input type="submit" value="Send Now" id="idSubmit" class="button">
		</p>
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
