<?php
/* Smarty version 3.1.30, created on 2018-03-01 04:39:16
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\reviewsubmission.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9775e4c94ed4_27975139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72cffc937fade0b6c58845b62335a46bf0775df2' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\reviewsubmission.tpl',
      1 => 1519825057,
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
function content_5a9775e4c94ed4_27975139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Thank you for your review, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</h2>
	Your review will be posted to our fruit basket.
	<p>
		Fruit: <?php echo $_smarty_tpl->tpl_vars['fruitName']->value;?>
<br>
		Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br>
		Review: <?php echo $_smarty_tpl->tpl_vars['review']->value;?>
<br>
		Rating: <?php echo $_smarty_tpl->tpl_vars['rating']->value;?>
 stars			
	</p>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="show_fruitbasket_page" id="idBack">
		<input type="submit" value="Back" id="idBack" class="button">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
