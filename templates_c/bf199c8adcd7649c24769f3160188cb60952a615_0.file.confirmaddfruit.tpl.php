<?php
/* Smarty version 3.1.30, created on 2018-03-01 04:06:48
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\confirmaddfruit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a976e48614b41_38389695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf199c8adcd7649c24769f3160188cb60952a615' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\confirmaddfruit.tpl',
      1 => 1519824982,
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
function content_5a976e48614b41_38389695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Thank you for your submission!</h2>
	Your fruit will be added to the fruit basket!
	<p>
		Fruit: <?php echo $_smarty_tpl->tpl_vars['fruitName']->value;?>
<br>
		Color(s): <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<br>
		Please Note: An image will be added to the database after our farmers review the new fruit.		
	</p>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="show_fruitbasket_page" id="idBack">
		<input type="submit" value="Back" id="idBack" class="button">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
