{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Top 10 Fruits</h2>
	<p>These are the top 10 rated fruits in the fruit basket:</p>
	<div id="top10">
		{foreach item=fruit from=$fruit_basket name='basket'}
		<div class="top10row">
			<div class="top10counter">{$smarty.foreach.basket.iteration}.</div>
			<form action="index.php" id="viewreviews" method="post" class="top10item">
				<input type="hidden" name="action" value="view_reviews">
				<input type="hidden" name="fruit_id" value="{$fruit->getID()}">
				<button class="fruitbutton">
					<img src="{$fruit->getImage('medium')}" alt="Fruit picture"><br>
					<b>{$fruit->getName()} </b><br>
					{if ($fruit->getRating() != "")}
					Avg. rating: {$fruit->getRating()}
					{/if}
				</button>
			</form>
		</div>
		{/foreach}
	</div>
</main>

{include file='shared/footer.tpl'}