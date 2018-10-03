{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<aside>Is there a problem with this fruit?
		<form action="index.php" id="editform" method="post">
			<input type="hidden" name="action" value="edit_fruit_form">
			<input type="hidden" name="fruit_id" value="{$fruitID}">
			<input type="submit" value="Edit {$fruitName}" id="idSubmitEdit" class="button">
		</form>
	</aside>
	<h2>Reviews for the {$fruitName}</h2>
	<p>What do you think of this fruit?</p>

	<form method="post" id="addreview" action="index.php" style="background-image: url({$image});" class="fruitbackground">
		<input type="hidden" id="idHidden" name="action" value="add_review" >
		<input type="hidden" id="idfruitID" name="fruitID" value="{$fruitID}">
		<p>
			<label for="idName">*Your name: </label>
			<input type="text" id="idName" name="name" required="required">
		</p>
		<p>
			<label for="idReview">*Review: </label>
			<textarea id="myReview" name="review" rows="5" cols="40" required="required"></textarea>
		</p>
		<label></label><fieldset class="rating">
		<legend>Rate the {$fruitName}:</legend>
		<input type="radio" id="star5" name="rating" value="5"><label for="star5" title="Rocks!">5 stars</label>
		<input type="radio" id="star4" name="rating" value="4"><label for="star4" title="Pretty good">4 stars</label>
		<input type="radio" id="star3" name="rating" value="3"><label for="star3" title="Meh">3 stars</label>
		<input type="radio" id="star2" name="rating" value="2"><label for="star2" title="Kinda bad">2 stars</label>
		<input type="radio" id="star1" name="rating" value="1"><label for="star1" title="Sucks big time">1 star</label>
		</fieldset>
		<p>
			<label></label><input type="submit" value="Post Review" id="idSubmit" class="button">
		</p>
	</form>

	<div id="reviews">
		{foreach item=review from=$fruitReviews name='fruitReview'}
		<div class="review">
			<img src="{$image}" class="reviewFruit">

			<b>{$review->getName()}</b>
			<span class="date">{$review->getDate()|date_format}</span><br>
			{$review->getReview()}<br>
			<p><b>Rating:</b> 
				{"★"|str_repeat:$review->getRating()}{"☆"|str_repeat:(5-$review->getRating())}</p>
		</div>
		{/foreach}
	</div>
</main>

{include file='shared/footer.tpl'}