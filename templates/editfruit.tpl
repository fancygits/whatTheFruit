{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main style="background-image: url({$image});" class="fruitbackground">
	<h2>Edit the fruit</h2>
	<p>Thanks for taking the time to better our fruit basket!</p>

	<form method="post" id="editfruitform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="update_fruit" >
		<input type="hidden" id="idfruitID" name="fruitID" value="{$fruitID}">
		<p>
			<label for="idName">*Name: </label>
			<input type="text" id="idName" name="name" value="{$name}" required="required">
		</p>
		<p>
			<label for="idColor">*Available colors: </label>
			<input type="text" id="idColor" name="color" value="{$color}" required="required">
		</p>
		<p>
			<label></label><input type="submit" value="Update Fruit" id="idSubmit" class="button">
		</p>
	</form>
	<form action="index.php" id="deleteform" method="post">
		<input type="hidden" name="action" value="delete_fruit">
		<input type="hidden" name="fruit_id" value="{$fruitID}">
		<p>
			<label></label><input type="submit" value="Delete Fruit" id="idSubmitDelete" class="button">
		</p>
	</form>
</main>

{include file='shared/footer.tpl'}