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
			$menu = array("Home", "Languages", "Prices", "Contact Us");
			$first=$menu[0];
			foreach ($menu as $row) {
				if($row==$first){
					echo "<li><a href=\"dashboard.php?page=$row\"  class=\"spanat active\">$row</a></li>";
				}else{
					echo "<li><a href=\"dashboard.php?page=$row\"  class=\"spanat\">$row</a></li>";
				}
			}
			?>
			<button onclick="window.location='main.php'" class="btn">LOG OUT</button>
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