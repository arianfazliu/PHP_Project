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
        <div>

            <img src="../img/dice/<?php echo rand(1,6); ?>.png" alt="">
        
            
            <p>
            <input class="button" type="button" value="Roll the dice" onclick="window.location.reload();"/>
            </p>

        </div>
        <div class="readclass">
           <?php
         $filename = "tmp.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );

      $filewithext = basename($filename);         // outputi "tmp.txt"
      $filewithoutext = basename($filename, ".txt"); // outputi "tmp"
         fclose( $file );
         echo ("File name with ext.: $filewithext<br>");
        echo ("File name without ext.: $filewithoutext<br>");
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
      ?>
        </div>


        <div>
          <?php
              // e fshin content edhe ja nis prej fillimi..e krijon ni file tri nese s ekziston
              //$myfile = fopen("newfile.txt", "w") or die("Unable to open file!"); 

              // kur tshton tekst e bon append tekstin e ri qe shtohet
              $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
              $txt = "sdfgbnFK \n";
              fwrite($myfile, $txt);
              $txt = "Pmmbvcing\n";
              fwrite($myfile, $txt);
              fclose($myfile);
              ?>

              
            <input class="writebutton writebutton1" type="button" value="Write Function" 
            onclick="window.location.reload();"/>
            

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

.readclass {
border: 2px solid gray;
display: grid; 
justify-content: space-between; 
text-align: center;

}

.writebutton {
  background-color: #64cdb7;
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 5px;
}

.writebutton1 {
  background-color: white; 
  color: black; 
  border: 2px solid #64cdb7;
}
  .writebutton1:hover {
  background-color: #64cdb7;
  color: white;
}
</style>