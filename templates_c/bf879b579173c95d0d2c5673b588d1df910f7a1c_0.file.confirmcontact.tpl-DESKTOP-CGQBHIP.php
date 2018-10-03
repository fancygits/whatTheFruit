<?php
/* Smarty version 3.1.30, created on 2018-02-25 04:58:52
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\confirmcontact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a92347cce6b81_29622752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf879b579173c95d0d2c5673b588d1df910f7a1c' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\confirmcontact.tpl',
      1 => 1519531088,
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
function content_5a92347cce6b81_29622752 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Thank you for contacting us!</h2>
	We have received the your message an will contact you as soon as possible.
	<p>
		Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br>
		Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br>
		<?php if (($_smarty_tpl->tpl_vars['phone']->value != '')) {?>
			Phone: <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <br>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['date']->value != '')) {?>
			Date: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['messageDate']->value,"%A, %B, %e, %Y");?>
 <br>
		<?php }?>
		Comments: <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
			
	</p>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="show_home_page" id="idBack">
		<input type="submit" value="Back" id="idBack">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
