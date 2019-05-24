<?php 
	class Card{
		var $title;
		var $text;
		var $percentage;
		var $color;
	}
	$card1 = new Card;
	$card1->title = 'English';
	$card1->text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae officia, ad eos, hic dignissimos cupiditate perferendis, assumenda repudiandae optio repellendus quae accusamus aliquid porro amet temporibus recusandae perspiciatis error maiores.';
	$card1->percentage = '83%';
	$card1->color='#618fee';
	$card2 = new Card;
	$card2->title = 'French';
	$card2->text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae officia, ad eos, hic dignissimos cupiditate perferendis, assumenda repudiandae optio repellendus quae accusamus aliquid porro amet temporibus recusandae perspiciatis error maiores.';
	$card2->percentage = '30%';
	$card2->color='#ee8c62';
	$card3 = new Card;
	$card3->title = 'Korean';
	$card3->text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae officia, ad eos, hic dignissimos cupiditate perferendis, assumenda repudiandae optio repellendus quae accusamus aliquid porro amet temporibus recusandae perspiciatis error maiores.';
	$card3->percentage = '15%';
	$card3->color='#91e78e';
	$card4 = new Card;
	$card4->title = 'Spanish';
	$card4->text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae officia, ad eos, hic dignissimos cupiditate perferendis, assumenda repudiandae optio repellendus quae accusamus aliquid porro amet temporibus recusandae perspiciatis error maiores.';
	$card4->percentage = '5%';
	$card4->color='#618fee';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cards</title>
</head>
<body>
	<div class="display_grid">
		<div>
			<div class="cards">
				<?php echo "<h3 class=\"cards-h3\">
					$card1->title
				</h3>
				<p class=\"loremi\">$card1->text</p>
				" ?>
			</div>
			<div class="loading">
				<div style="position:relative;width:100%;margin:0 10px 0 0 ; height: 3px;background-color:#f1f1f1;">
					<div style="position: absolute;left:0;top:0;margin:0;width: <?php echo $card1->percentage ?>;height:3px;z-index:1;background-color: <?php echo $card1->color ?>;"></div>
				</div>
				<?php 
					echo"$card1->percentage";
				?>
			</div>
		</div>
		<div>
			<div class="cards">
				<?php echo "<h3 class=\"cards-h3\">
					$card2->title
				</h3>
				<p class=\"loremi\">$card2->text</p>
				" ?>
			</div>
			<div class="loading">
				<div style="position:relative;width:100%;margin:0 10px 0 0 ; height: 3px;background-color:#f1f1f1;">
					<div style="position: absolute;left:0;top:0;margin:0;width: <?php echo $card2->percentage ?>;height:3px;z-index:1;background-color: <?php echo $card2->color ?>"></div>
				</div>
				<?php 
					echo"$card2->percentage";
				?>
			</div>
		</div>
		<div>
			<div class="cards">
				<?php echo "<h3 class=\"cards-h3\">
					$card3->title
				</h3>
				<p class=\"loremi\">$card3->text</p>
				" ?>
			</div>
			<div class="loading">
				<div style="position:relative;width:100%;margin:0 10px 0 0 ; height: 3px;background-color:#f1f1f1;">
					<div style="position: absolute;left:0;top:0;margin:0;width: <?php echo $card3->percentage ?>;height:3px;z-index:1;background-color: <?php echo $card3->color ?>"></div>
				</div>
				<?php 
					echo"$card3->percentage";
				?>
			</div>
		</div>
		<div>
			<div class="cards">
				<?php echo "<h3 class=\"cards-h3\">
					$card4->title
				</h3>
				<p class=\"loremi\">$card4->text</p>
				" ?>
			</div>
			<div class="loading">
				<div style="position:relative;width:100%;margin:0 10px 0 0 ; height: 3px;background-color:#f1f1f1;">
					<div style="position: absolute;left:0;top:0;margin:0;width: <?php echo $card4->percentage ?>;height:3px;z-index:1;background-color: <?php echo $card4->color ?>"></div>
				</div>
				<?php 
					echo"$card4->percentage";
				?>
			</div>
		</div>
	</div>
</body>
</html>
<style>
.cards, .loading{
	border-radius:5px;
	border:solid 1px #f1f1f1;
	padding: 5px 20px;
	box-shadow:0 0px 5px 0px #f1f1f1;
}
.cards-h3{
	font-weight: 400;
	letter-spacing: .5px;
}
.loremi{
	color:gray;
	font-size:15px;
	word-break: break-all;
}
.loading{
	padding:20px;
	display: flex;
	align-items: center;
}
</style>