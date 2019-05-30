<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    
</head>

<body>

<div class="homepage">
   <?php include('../components/header.php') ?>
	<div class="displayContent">
      <img src="../img/search.png" style="height: 120%;width: 80%;position: absolute;top:-100px;left:auto;right:auto;z-index:0;" alt="">
      <div style="z-index: 1;">
        <form autocomplete="off" class="example" action="javascript:void(0)">
          <input type="text" placeholder="Search" name="search" onkeyup="showsuggestion(this.value);">
        </form>
      </div>
      <div id="divsuggestion" style="z-index: 10;">
      </div>
	</div>
   <?php include('../components/footer.php') ?>
</div>
</body>

</html>
<script></script>
<style>
body,html{
  height: 100%;
	box-sizing: border-box;
	background-color: #fafafa;
}
.homepage{
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.displayContent{
  position: relative;
  display: flex;
  flex-direction: column;
  margin-bottom: auto;
  background-color: white;
  justify-content: center;
  align-items: center;
  overflow-y:hidden;
  height: 100%;
}
* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  width:500px ;
  border-radius: 2px;
  border:none;
  outline: none;
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