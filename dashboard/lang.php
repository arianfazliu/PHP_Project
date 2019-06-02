<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../components/header.php' ?>
<body>
	<div class="homepage">
		<div class="profile">
			<div class="image">
			</div>
			<div style="margin-left:30px;">
				<h2 class="h2"><?php echo $_SESSION["lang"]?></h2>
				<h3 class="h3">Part 1 of the complete and inspirational mission to memories <?php echo $_SESSION["lang"]?> Find your way around <?php echo $_SESSION["lang"]?>, talk about the future, learn some <?php echo $_SESSION["lang"]?> expressions that will impress everyone you meet! <br>
					Start learning now by <b>adding this to your courses!</b>
				</h3>
				<button class="buttoni" onclick="addToCourses()">
					ADD TO COURSES
				</button>
			</div>
		</div>
	</div>
</body>
<script>
	function addToCourses(){

	}
</script>
<style>
	body,html{
	  height: calc(100% - 99px);
	  box-sizing: border-box;
	  margin:0;
	}
	.h2{
		color:#545454;margin-top:0 !important;
	}
	.h3{
		color:#777575;
		font-weight: 300;
		letter-spacing: 1px;
		margin:0 0 10px 0;
		max-width: 1000px;
	}
	.homepage{
	  	height: 100%;
		display: flex;
		justify-content: space-between;
		text-align: left;
	}
	.profile{
	  	position: relative;
		color:black;
		background-color: white;
		padding: 20px;
		margin:auto auto; 
		align-items: center;
		box-shadow:0 0px 5px 0px #f1f1f1;
		display: flex;
	}
	.buttoni{
		padding: 10px 50px;
	    font-size: 15px;
	    background-color: #63cdb7;
	    color: white;
	    border-radius: 5px;
	    margin-top: 20px;
	    border: none;
	    outline:none;
	    cursor:pointer;
	}
	.image{
		background: url(../img/book.png);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		border:solid 2px #9fe2d4;
		border-radius: 20px; 
		height: 150px;
		width: 150px;
	}
</style>
</html>
<?php include '../components/footer.php' ?>
