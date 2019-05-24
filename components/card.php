<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cards</title>
</head>
<body>
	<div class="cards">
		<h3 class="cards-h3">
			English
		</h3>
		<p class="loremi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae officia, ad eos, hic dignissimos cupiditate perferendis, assumenda repudiandae optio repellendus quae accusamus aliquid porro amet temporibus recusandae perspiciatis error maiores.</p>
	</div>
	<div class="loading">
		<div style="position:relative;width:100%;margin:0 10px 0 0 ; height: 3px;background-color:#f1f1f1;">
			<div style="position: absolute;left:0;top:0;margin:0;width:70%;height:3px;z-index:1;background-color:#618fee;"></div>
		</div>70%
	</div>
</body>
</html>
<style>
.cards, .loading{
	border-radius:5px;
	border:solid 1px #f1f1f1;
	padding: 0px 20px;
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