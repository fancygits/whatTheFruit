{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Thank you for your review, {$name}!</h2>
	Your review will be posted to our fruit basket.
	<p>
		Fruit: {$fruitName}<br>
		Name: {$name}<br>
		Review: {$review}<br>
		Rating: {$rating} stars			
	</p>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="show_fruitbasket_page" id="idBack">
		<input type="submit" value="Back" id="idBack" class="button">
	</form>
</main>

{include file='shared/footer.tpl'}