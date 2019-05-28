<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
</head>
<body>
	<div class="dashboard">
		<div class="nav">
			<h2>GET<span class="fluent">FLUENT</span></h2>
			<div class="nav-right">
				<?php
				function active($currect_page){
				  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
				  $url = end($url_array);  
				  if($currect_page == $url){
				      echo 'active'; //class name in css 
				  } 
				}
				?>
				<!-- 
				pathi te ariani
				 <li><a class="spanat <?php active('main.php');?>" href="http://localhost/PHP_Project/dashboard/main.php">Home</a></li>
			    <li><a class="spanat <?php active('languages.php');?>" href="http://localhost/PHP_Project/dashboard/main.php">Languages</a></li>
			    <li><a class="spanat <?php active('quiz.php');?>" href="http://localhost/PHP_Project/dashboard/main.php">Prices</a></li>
			    <li><a class="spanat <?php active('contactus.php');?>" href="http://localhost/PHP_Project/dashboard/main.php">Contact Us</a></li>
				<button class="btn" onClick="document.location.href='login.php'">LOG IN</button>

				-->
			    <li><a class="spanat <?php active('main.php');?>" href="http://localhost/Webucator/ClassFiles/PHPBasics/Demos/PHP_project/dashboard/main.php">Home</a></li>
			    <li><a class="spanat <?php active('languages.php');?>" href="http://localhost/Webucator/ClassFiles/PHPBasics/Demos/PHP_project/dashboard/main.php">Languages</a></li>
			    <li><a class="spanat <?php active('quiz.php');?>" href="http://localhost/Webucator/ClassFiles/PHPBasics/Demos/PHP_project/dashboard/main.php">Prices</a></li>
			    <li><a class="spanat <?php active('contactus.php');?>" href="http://localhost/Webucator/ClassFiles/PHPBasics/Demos/PHP_project/dashboard/main.php">Contact Us</a></li>
				<button class="btn" onClick="document.location.href='login.php'">LOG IN</button>
			</div>
		</div>
		<div class="center">
			<div>
				<h1>
					Learn a Language with GetFluent!
				</h1>
				<p>Earn points for correct answers, race against the clock, and level up.
					Our bite-sized lessons are effective, and we have proof that it works.
				</p>
				<button id="myBtn" onclick="window.location='signup.php'">Get Started</button>
			</div>
			<div>
				<img src="../img/books.png" style="height: 450px; width: 600px;margin-top:50px;margin-right:-10px;" alt="">
			</div>
		</div>
	</div>
</body>
</html>
<script>
</script>
<style>
	body,html{
		margin:0;
		box-sizing: border-box;
		font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
		height: 100%;
	}
	.dashboard{
		padding:0px 180px;
		height: 100%;
	}
	.nav{
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	h2{
		color:#323232;
	}
	.fluent{
		color:#69e4a9;
	}
	.nav-right{
		display: flex;
		align-items: center;
	}
	a,li{
		text-decoration: none;
		list-style-type: none;
		color:#838383;
		margin:0;
		padding:0;
	}
	.spanat{
		margin-left:40px;
		font-size:17px;
		letter-spacing: .3px;
	}
	.active{
		border-bottom:solid 2px #63cdb7 ;
	}
	.center{
		height: calc(100% - 100px);
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.btn{
		cursor: pointer;
		padding:5px 40px;
		border:solid 2px #63cdb7;
		color:#63cdb7;
		font-weight: 600;
		font-size: 13px;
		margin-left:40px;
		outline: none;
		border-radius:20px;
	}
	#myBtn{
		cursor: pointer;
		padding:10px 40px;
		background-color:#63cdb7;
		border:none;
		color:white;
		font-weight: 600;
		font-size: 18px;
		margin-left:40px;
		outline: none;
		margin-top:30px;
		margin-left: 0;
		border-radius:20px;
	}
	h1{
		color:#313131;
		font-size:55px;
	}
	p{
		color:#8f8f8f;
		font-size:18px;
	}
</style>