{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<aside>
		Is there a fruit missing from the basket?
		<form action="index.php" id="editform" method="post">
			<input type="hidden" name="action" value="add_fruit_form">
			<input type="submit" value="Add a fruit!" id="idSubmitEdit" class="button">
		</form>
	</aside>
	<h2>The Fruit Basket</h2>
	<div id="basket">
		<div class="basket-row">
			{foreach item=fruit from=$fruit_basket name='basket'}
			<div class="basket-item">
				<form action="index.php" id="viewreviews" method="post">
					<input type="hidden" name="action" value="view_reviews">
					<input type="hidden" name="fruit_id" value="{$fruit->getID()}">
					<button class="fruitbutton">
						<div class="fruitbuttoninterior">
							<img src="{$fruit->getImage('medium')}" alt="Fruit picture"><br>
							<b>{$fruit->getName()} </b><br>
							{if ($fruit->getRating() != "")}
							Avg. rating: {$fruit->getRating()}
							{/if}
						</div>
					</button>
				</form>
			</div>
			{if $smarty.foreach.basket.iteration is div by 3}
		</div><div class="basket-row">
		{/if}
		{/foreach}
		</div>
	</div>
</main>

{include file='shared/footer.tpl'}