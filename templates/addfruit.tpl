{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main style="background-image: url('./model/images/default_fruit_large.png');" class="fruitbackground">
	<h2>Add a fruit to the basket</h2>
	<form method="post" id="addfruitform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="add_fruit" >
		<p>
			<label for="idFruitName">* Fruit Name: </label>
			<input type="text" id="idFruitName" name="fruitName" required="required">
		</p>
		<p>
			<label for="idColors">* Possible Colors: </label>
			<input type="text" id="idColors" name="color" required="required">
		</p>
		<p>
			<input type="submit" value="Submit Fruit" id="idSubmit" class="button">
		</p>
	</form>
</main>

{include file='shared/footer.tpl'}