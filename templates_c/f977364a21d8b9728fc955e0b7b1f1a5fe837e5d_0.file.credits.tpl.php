<?php
/* Smarty version 3.1.30, created on 2018-03-01 04:05:54
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\credits.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a976e127a4144_87644896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f977364a21d8b9728fc955e0b7b1f1a5fe837e5d' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\credits.tpl',
      1 => 1519873543,
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
function content_5a976e127a4144_87644896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>What the Fruit!?</h2>
	<p>All images are shared under a Creative Commons license and found at:</p>
		<ul>
		<li><a href="http://pngimg.com/">PNGimg.com</a></li>
		<li><a href="https://openclipart.org">OpenClipart.org</a></li>
		<li><a href="http://www.freegreatpicture.com/">FreeGreatPicture.com</a></li>
		<li><a href="https://www.publicdomainpictures.net/">PublicDomainPictures.net</a></li>
	</ul>
	<p>The 5-star review code was used with permisson from
		<a href="http://lea.verou.me/2011/08/accessible-star-rating-widget-with-pure-css/">Lea Verou</a>.</p>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
