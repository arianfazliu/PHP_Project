<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php include('../components/header.php') ?>
	<div class="homepage">
		<div style="display: flex;justify-content: space-between; align-items: center;">
			<h3 style="margin:0;">My Courses</h3>
			<button class="butoni">All Courses 
				<object type="image/svg+xml" data="../img/chevron-down.svg"></object>
			</button>
		</div>
		<div class="display_grid">
			<div>
				<?php  include('../components/card.php') ?>
			</div>
			<div>
				<?php  include('../components/card.php') ?>
			</div>
			<div>
				<?php  include('../components/card.php') ?>
			</div>
		</div>
	</div>
	<?php include('../components/footer.php') ?>
</body>
</html>
<script>
	
</script>
<style>
html,body{
	height: 100%;
	box-sizing: border-box;
	background-color: #fafafa;
}
.homepage{
	padding: 20px 100px;
	min-height: 70%;
}
.display_grid{
	display: grid;
  	grid-template-columns: auto auto auto;
	background-color: white;
	padding: 20px;
	margin:20px 0;
	border-radius:5px;
	box-shadow:0 0px 5px 0px #f1f1f1;
}
.display_grid div{
		text-align:center;
		margin:5px 5px 25px 5px;
}
.butoni{
	display: flex;
	cursor:pointer;
	align-items: center;
	background-color: white;
	font-size:15px;
	border:none;
	border-radius:5px;
	padding:10px 15px;
	outline:none;
}
object{
	margin-bottom:-3px;
	margin-left:2px;
}
</style>