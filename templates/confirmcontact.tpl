{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Thank you for contacting us!</h2>
	We have received the your message and will contact you as soon as possible.
	<p>
		Name: {$name}<br>
		Email: {$email}<br>
		{if ($phone != "")}
			Phone: {$phone} <br>
		{/if}
		{if ($messageDate != "")}
			Date: {$messageDate|date_format:"%A, %B, %e, %Y"} <br>
		{/if}
		Comments: {$comments}			
	</p>
	<form method="post" action="index.php">
		<input type="hidden" name="action" value="show_home_page" id="idBack">
		<input type="submit" value="Back" id="idBack" class="button">
	</form>
</main>

{include file='shared/footer.tpl'}