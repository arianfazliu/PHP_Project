<?php include('server.php') ;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
</head>
<body>
	<div class="signup">
		<div id="frm">
			<p class="header" style="font-family:Pretty;padding-top: 50px;">Sign Up</p >
			<form action="signup.php" method="POST">
				<?php include('errors.php') ?>
				<div class="inputi">
					<object type="image/svg+xml" data="../img/user.svg">
					</object>
					<input  value="<?php echo $username; ?>" placeholder="Username" type="text" name="user" id="user">
				</div>
				<div class="inputi">
					<object type="image/svg+xml" data="../img/maili.svg">
					</object>
					<input  placeholder="E-mail" value="<?php echo $email; ?>" type="text" name="email" id="email">
				</div>
				<div class="inputi">
					<object type="image/svg+xml" data="../img/phone.svg">
					</object>
					<input  pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="Phone number 1929-808-1025" type="tel" name="phonenum" id="phonenum">
				</div>
				<div class="inputi">
					<object type="image/svg+xml" data="../img/lock.svg">
					</object>
					<input  placeholder="Password" type="password" name="pass" id="pass">
				</div>
				<div class="inputi">
					<object type="image/svg+xml" data="../img/key.svg">
					</object>
					<input  placeholder="Confirm password" type="password" name="pass1" id="pass1">
				</div>
				<div class="inputi">
					<input class="login" type="submit" name="reg_user" value="Sign Up" id="btn">
				</div>
			</form>
			<p style="cursor:pointer;margin-top:100px;color: #a9b5bf;">Already have an account? <span onclick="window.location='login.php'" style="color:#73ccf5">Log In!</span></p>
		</div>
		<div style="flex:1; display: flex;align-items: center; justify-content: center;">
			<img src="../img/launch.png" style="height: 500px;width:600px;" alt="">
		</div>
	</div>
</body>
</html>
<style lang="css">
body,html{
	margin:0;
	box-sizing: border-box;
	font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, sans-serif;
	height: 100%;
}
.header{
	color:#496070;
	font-size:35px;
}
@font-face{
	font-family: "Pretty";
    src: url("magic.woff") format("woff");     
}
.signup{
	position: relative;
	display: flex;
	height: 100%;
}
#frm{
	flex:1;
	background-color: #f2f7fa; 
	display:flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
input{
	font-size: 16px;
    font-weight: 300;
    color:#b6bfc3 ;
    outline: none;
    letter-spacing: .5px;
    padding: 10px 20px;
    border-radius:5px;
    width: 100%;
    border: none;
    border-left: solid 2px #f8f9fd;
}
input:focus{
	color:black;
}
object{
	padding: 10px;
}
form{
	width: 100%;
}
.inputi{
	margin:auto;
	width: 50%;
	display: flex;
    background-color: white;
    border: solid 2px white;
    border-radius: 5px;
    margin-top:10px;
}
.inputi:last-child{
	border:solid 2px #42b4f2a6;
	padding: 0;
	margin-top:20px;
}
.login{
    padding: 15px 25px;
	background-color: #42b4f2a6 ;
	color:white ;
	border-left: none;
	border-radius:0;
	cursor: pointer;
}
.login:focus{
	color:white;
}
</style>