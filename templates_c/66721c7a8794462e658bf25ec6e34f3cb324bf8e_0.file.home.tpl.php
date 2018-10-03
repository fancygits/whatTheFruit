<?php
/* Smarty version 3.1.30, created on 2018-03-08 01:24:58
  from "C:\Users\Luke\OneDrive\Documents\Grad School\CS6252 - Web Technologies II\htdocs\WhatTheFruit\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa082da8c1bc7_88412690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66721c7a8794462e658bf25ec6e34f3cb324bf8e' => 
    array (
      0 => 'C:\\Users\\Luke\\OneDrive\\Documents\\Grad School\\CS6252 - Web Technologies II\\htdocs\\WhatTheFruit\\templates\\home.tpl',
      1 => 1519962271,
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
function content_5aa082da8c1bc7_88412690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>What the Fruit!?</h2>
	<h4>The World's ONLY source for fruit reviews.</h4>
	<a href="index.php?action=show_fruitbasket_page"><img src="./model/images/basket.png" alt="fruit basket" id="actualbasket"></a>

	<p>Check out our Fruit Basket to see every fruit you can imagine!<p>
	<p>Then, rate and review the fruit! Let the world know what you think!</p>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
