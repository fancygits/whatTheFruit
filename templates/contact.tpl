{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Contact Us</h2>
	<form method="post" id="contactform" action="index.php">
		<input type="hidden" id="idHidden" name="action" value="process_contact_form" >
		<p>
			<label for="idName">* Name: </label>
			<input type="text" id="idName" name="name" required="required">
		</p>
		<p>
			<label for="idEmail">* E-mail: </label>
			<input type="email" id="idEmail" name="email" required="required">
		</p>
		<p>
			<label for="idPhone">Phone: </label>
			<input type="tel" id="idPhone" name="phone">
		</p>
		<p>
			<label for="idDate">Date: </label>
			<input type="date" id="idDate" name="messageDate">
		</p>
		<p>
			<label for="idComments">* Comments: </label>
			<textarea id="myComments" name="comments" rows="5" cols="40" required="required"></textarea>
		</p>
		<p>
			<label></label><input type="submit" value="Send Now" id="idSubmit" class="button">
		</p>
	</form>
</main>

{include file='shared/footer.tpl'}