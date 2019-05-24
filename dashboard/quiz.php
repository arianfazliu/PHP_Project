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
        <div><h1>English Quiz!</h1>
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
</style>