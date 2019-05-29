<!DOCTYPE html>
<html lang="en">
<head>
	<title>Header</title>
</head>
<body>
	<div class="nav">
		<h3>GET<span class="fluent">FLUENT</span></h3>
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
			<!-- pathi arian -->
			<li><a class="spanat <?php active('dashboard.php');?>" href="http://localhost:82/PHP_project/dashboard/dashboard.php">Home</a></li>
		    <li><a class="spanat <?php active('languages.php');?>" href="http://localhost:82/PHP_project/dashboard/languages.php">Languages</a></li>
		    <li><a class="spanat <?php active('quiz.php');?>" href="http://localhost:82/PHP_project/dashboard/quiz.php">Quiz</a></li>
		    <li><a class="spanat <?php active('contactus.php');?>" href="http://localhost:82/PHP_project/dashboard/contactus.php">Contact Us</a></li>


		    <!-- 
			pathi aurora
		    <li><a class="spanat <?php active('dashboard.php');?>" href="http://localhost/Webucator/ClassFiles/PHPBasics/Demos/PHP_project/dashboard/dashboard.php">Home</a></li>
		    <li><a class="spanat <?php active('languages.php');?>" href="http://localhost/Webucator/ClassFiles/PHPBasics/Demos/PHP_project/dashboard/languages.php">Languages</a></li>
		    <li><a class="spanat <?php active('quiz.php');?>" href="http://localhost/Webucator/ClassFiles/PHPBasics/Demos/PHP_project/dashboard/quiz.php">Quiz</a></li>
		    <li><a class="spanat <?php active('contactus.php');?>" href="http://localhost/Webucator/ClassFiles/PHPBasics/Demos/PHP_project/dashboard/contactus.php">Contact Us</a></li> 
			<button onclick="window.location='main.php'" class="btn">LOG OUT</button>-->
		</div>
	</div>
</body>
</html>
<style>
	body,html{
		margin:0;
		box-sizing: border-box;
		font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	.nav{
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding:5px 100px;
		background-color: white;
		position: sticky;
		top:0;
		z-index: 10;
	}
	h3{
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
</style>