<?php
/* Smarty version 3.1.30, created on 2018-03-02 04:53:40
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\fruitbasket.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98cac473ebd7_98195781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2042bb376ee87303f70e26c6335f7e02bc358a74' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\fruitbasket.tpl',
      1 => 1519962298,
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
function content_5a98cac473ebd7_98195781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<aside>
		Is there a fruit missing from the basket?
		<form action="index.php" id="editform" method="post">
			<input type="hidden" name="action" value="add_fruit_form">
			<input type="submit" value="Add a fruit!" id="idSubmitEdit" class="button">
		</form>
	</aside>
	<h2>The Fruit Basket</h2>
	<div id="basket">
		<div class="basket-row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fruit_basket']->value, 'fruit', false, NULL, 'basket', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fruit']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_basket']->value['iteration']++;
?>
			<div class="basket-item">
				<form action="index.php" id="viewreviews" method="post">
					<input type="hidden" name="action" value="view_reviews">
					<input type="hidden" name="fruit_id" value="<?php echo $_smarty_tpl->tpl_vars['fruit']->value->getID();?>
">
					<button class="fruitbutton">
						<div class="fruitbuttoninterior">
							<img src="<?php echo $_smarty_tpl->tpl_vars['fruit']->value->getImage('medium');?>
" alt="Fruit picture"><br>
							<b><?php echo $_smarty_tpl->tpl_vars['fruit']->value->getName();?>
 </b><br>
							<?php if (($_smarty_tpl->tpl_vars['fruit']->value->getRating() != '')) {?>
							Avg. rating: <?php echo $_smarty_tpl->tpl_vars['fruit']->value->getRating();?>

							<?php }?>
						</div>
					</button>
				</form>
			</div>
			<?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_basket']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_basket']->value['iteration'] : null) % 3)) {?>
		</div><div class="basket-row">
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
	</div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
