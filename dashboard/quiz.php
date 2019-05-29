<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <script type="text/javascript" src="../js/thequiz.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
</head>

<body>
    <div class="quiz">
        <?php include('../components/header.php') ?>
        <div >

            <img src="../img/dice/<?php echo rand(1,6); ?>.png" alt="">
        
            
            <p>
            <input class="button" type="button" value="Roll the dice" onclick="window.location.reload();"/>
            </p>

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
	margin:0;
}
.quiz{
	height: 100%;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	text-align: center;
}

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #64cdb7;
  border: none;
  border-radius: 15px;
  box-shadow:0 0 5px 0px #999
}

.button:hover {background-color: #499081;}

.button:active {
  background-color: #64cdb7;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>