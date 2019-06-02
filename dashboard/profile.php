<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php require'../components/header.php'; ?>
<body>
	<div class="homepage">
		<div class="profile">
			<div class="image">
			</div>
			<div class="therest">
				<h2 class="h2"><?php echo $_SESSION["name"]." ".$_SESSION["lname"]; ?></h2>
				<h3 class="h3">@<?php echo $_SESSION["user"]?></h3>
				<div style="text-align: left">
					<h3 class="h2" style="padding-bottom:2px;width:max-content;border-bottom:solid 1px gray;margin:20px 0;">Contact User :</h3>
					<h3 class="h3">Phone Number: <?php echo $_SESSION["phone"]; ?></h3>
					<h3 class="h3">Email: <?php  echo $_SESSION["email"];?></h3>
				</div>
			</div>
		</div>
		<button onclick="window.location='dashboard.php'" class="btni"><object type="image/svg+xml" data="../img/arrow-left.svg">
		</object>Go back</button>
	</div>
</body>
<style>
body,html{
  height: calc(100% - 99px);
  box-sizing: border-box;
  margin:0;
}
.h2{
	color:#545454;font-weight: 400;margin-bottom:5px;
}
.h3{
	color:#777575;
	font-weight: 300;
	letter-spacing: 1px;
	margin:0 0 10px 0;
}
.image{
	background: url(../img/book.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	border:solid 2px #9fe2d4;
	border-radius: 100%; 
	height: 120px;
	width: 120px;
}
.therest{
	padding: 5px;
}
.homepage{
  	height: 100%;
	display: flex;
	position: relative;
	justify-content: center;
	text-align: left;
}
.btni{
	position: absolute;
	bottom:50px;
	border:solid 1px #63cdb7;
	color:#63cdb7;
	outline: none;
	cursor: pointer;
	padding: 10px 30px;
	font-size:15px;
	background-color: white;
	border-radius: 5px;
	display: flex;
	align-items: center;
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
	flex-direction: column;
}

</style>
</html>
<?php include('../components/footer.php'); ?>
