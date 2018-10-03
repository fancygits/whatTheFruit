<?php
/* Smarty version 3.1.30, created on 2018-03-02 04:54:09
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\top10.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98cae19ffbf7_23465232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a9631affa373fa9cb443e14fa6272e598438ab7' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\top10.tpl',
      1 => 1519962259,
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
function content_5a98cae19ffbf7_23465232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Top 10 Fruits</h2>
	<p>These are the top 10 rated fruits in the fruit basket:</p>
	<div id="top10">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fruit_basket']->value, 'fruit', false, NULL, 'basket', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fruit']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_basket']->value['iteration']++;
?>
		<div class="top10row">
			<div class="top10counter"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_basket']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_basket']->value['iteration'] : null);?>
.</div>
			<form action="index.php" id="viewreviews" method="post" class="top10item">
				<input type="hidden" name="action" value="view_reviews">
				<input type="hidden" name="fruit_id" value="<?php echo $_smarty_tpl->tpl_vars['fruit']->value->getID();?>
">
				<button class="fruitbutton">
					<img src="<?php echo $_smarty_tpl->tpl_vars['fruit']->value->getImage('medium');?>
" alt="Fruit picture"><br>
					<b><?php echo $_smarty_tpl->tpl_vars['fruit']->value->getName();?>
 </b><br>
					<?php if (($_smarty_tpl->tpl_vars['fruit']->value->getRating() != '')) {?>
					Avg. rating: <?php echo $_smarty_tpl->tpl_vars['fruit']->value->getRating();?>

					<?php }?>
				</button>
			</form>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
