<!DOCTYPE html>
<html lang="en">

<head>
    <title>Languages</title>
    
</head>

<body>

 <?php include('../components/header.php') ?>
 <div class="homepage">
	<div style="display: flex;justify-content: space-between; align-items: center;">

	</div>
	<div class="displayContent">
        <div>
    <form class="example" action="action_page.php">
    <input type="text" placeholder="Search.." name="search" onkeyup="showsuggestion(this.value)">
     
    </form>
    </div>

    <div id="divsuggestion">
        
</div>
	</div>
</div>
 
 <?php include('../components/footer.php') ?>
</body>

</html>
<script></script>
<style>

.homepage{
padding: 20px 100px;
min-height: 70%;
}
body,html{
    height: 100%;
	box-sizing: border-box;
	background-color: #fafafa;
}

.displayContent div{
		text-align:center;
		margin:10px 15px 25px 15px;
        height: 100%;    
}
* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 3px solid lightgrey;
  float: left;
  width: 100%;
  background: #f1f1f1;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<script>
function showsuggestion(str) {
    if (str.length == 0) { 
        document.getElementById("divsuggestion").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("divsuggestion").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getsuggestion.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>