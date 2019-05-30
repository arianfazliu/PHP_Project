<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
<style type="text/css">
	body,html{
	margin:0;
	box-sizing: border-box;
	font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, sans-serif;
	height: 100%;
}
.header{
	color:#496070;
	font-size:40px;
	text-align: center;
	
}
span{
	font-size: 20px;
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
	cursor: pointer;
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
}
.login:focus{
	color:white;
}
</style>
</head>
<body>
  <div class="signup">
  	<div style="flex:1; display: flex;align-items: center; justify-content: center;">
		<img src="../img/login.png" style="height: 500px;width:600px;" alt="">
	</div> 
  	<div id="frm">
  	  <p class="header">Welcome Back! <br> <span>Log into your Account</span></p >
	  <form method="post" action="login.php">
	  	<?php include('errors.php'); ?>
	  	<div class="inputi">
	  		
	  		<object type="image/svg+xml" data="../img/user.svg">
			</object>

	  		<input  value="<?php echo $username; ?>" placeholder="Username" type="text" name="username" >

	  	</div>
	  	<div class="inputi">
	  		<object type="image/svg+xml" data="../img/lock.svg">
			</object>
	  		<input placeholder="Password" type="password" name="password">
	  	</div>
	  	<div class="inputi">
	  		<input class="login" type="submit" name="login_user" value="Log in" id="btn">	  	
	  	</div>
	  </form>
	  <p style="cursor:pointer;margin-top:100px;color: #a9b5bf;">Not yet a member? <span onclick="window.location='signup.php'" style="font-size: 16px;color:#73ccf5">Sign up!</span></p>
  	</div>
  </div>
</body>
</html>
