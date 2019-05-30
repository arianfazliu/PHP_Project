<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "ahbsjkl\n";
fwrite($myfile, $txt);
$txt = "aghjksl\n";
fwrite($myfile, $txt);
fclose($myfile);
?>