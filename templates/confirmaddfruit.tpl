{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Thank you for your submission!</h2>
	Your fruit will be added to the fruit basket!
	<p>
		Fruit: {$fruitName}<br>
		Color(s): {$color}<br>
		Please Note: An image will be added to the database after our farmers review the new fruit.		
	</p>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="show_fruitbasket_page" id="idBack">
		<input type="submit" value="Back" id="idBack" class="button">
	</form>
</main>

{include file='shared/footer.tpl'}