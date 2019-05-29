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
    <form class="example" action="javascript:void(0);" >
    <input type="text" placeholder="Search.." name="search" onkeyup="showsuggestion(this.value)" onsubmit="showsuggestion(this.value)"> 
     
    </form>
    </div>
  </div>
</div>
<?php include('../components/footer.php') ?>

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
  margin:20px 0;
  border-radius:5px;
}
.display_grid div{
    text-align:center;
    margin:10px 15px 25px 15px;
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
