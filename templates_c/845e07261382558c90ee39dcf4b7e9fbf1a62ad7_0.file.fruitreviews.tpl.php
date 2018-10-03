<?php
/* Smarty version 3.1.30, created on 2018-03-02 04:07:04
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\fruitreviews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98bfd8714c20_27954942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '845e07261382558c90ee39dcf4b7e9fbf1a62ad7' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\fruitreviews.tpl',
      1 => 1519950443,
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
function content_5a98bfd8714c20_27954942 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<aside>Is there a problem with this fruit?
		<form action="index.php" id="editform" method="post">
			<input type="hidden" name="action" value="edit_fruit_form">
			<input type="hidden" name="fruit_id" value="<?php echo $_smarty_tpl->tpl_vars['fruitID']->value;?>
">
			<input type="submit" value="Edit <?php echo $_smarty_tpl->tpl_vars['fruitName']->value;?>
" id="idSubmitEdit" class="button">
		</form>
	</aside>
	<h2>Reviews for the <?php echo $_smarty_tpl->tpl_vars['fruitName']->value;?>
</h2>
	<p>What do you think of this fruit?</p>

	<form method="post" id="addreview" action="index.php" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
);" class="fruitbackground">
		<input type="hidden" id="idHidden" name="action" value="add_review" >
		<input type="hidden" id="idfruitID" name="fruitID" value="<?php echo $_smarty_tpl->tpl_vars['fruitID']->value;?>
">
		<p>
			<label for="idName">*Your name: </label>
			<input type="text" id="idName" name="name" required="required">
		</p>
		<p>
			<label for="idReview">*Review: </label>
			<textarea id="myReview" name="review" rows="5" cols="40" required="required"></textarea>
		</p>
		<label></label><fieldset class="rating">
		<legend>Rate the <?php echo $_smarty_tpl->tpl_vars['fruitName']->value;?>
:</legend>
		<input type="radio" id="star5" name="rating" value="5"><label for="star5" title="Rocks!">5 stars</label>
		<input type="radio" id="star4" name="rating" value="4"><label for="star4" title="Pretty good">4 stars</label>
		<input type="radio" id="star3" name="rating" value="3"><label for="star3" title="Meh">3 stars</label>
		<input type="radio" id="star2" name="rating" value="2"><label for="star2" title="Kinda bad">2 stars</label>
		<input type="radio" id="star1" name="rating" value="1"><label for="star1" title="Sucks big time">1 star</label>
		</fieldset>
		<p>
			<label></label><input type="submit" value="Post Review" id="idSubmit" class="button">
		</p>
	</form>

	<div id="reviews">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fruitReviews']->value, 'review', false, NULL, 'fruitReview', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
		<div class="review">
			<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" class="reviewFruit">

			<b><?php echo $_smarty_tpl->tpl_vars['review']->value->getName();?>
</b>
			<span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value->getDate());?>
</span><br>
			<?php echo $_smarty_tpl->tpl_vars['review']->value->getReview();?>
<br>
			<p><b>Rating:</b> 
				<?php echo str_repeat("★",$_smarty_tpl->tpl_vars['review']->value->getRating());
echo str_repeat("☆",(5-$_smarty_tpl->tpl_vars['review']->value->getRating()));?>
</p>
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
