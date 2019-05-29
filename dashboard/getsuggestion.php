<?php

$languages = array("English"=>"https://www.facebook.com/", "French"=>"https://www.facebook.com/", "German"=>"https://www.facebook.com/", "Korean"=>"https://www.facebook.com/","Estonian"=>"https://www.facebook.com/");

$q = $_REQUEST["q"];


$suggestion = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($languages as $lang => $lang_value) {
        if (stristr($q, substr($lang, 0, $len))) {
            if ($suggestion === "") {
                $suggestion ="<a href=$lang_value><div class=\"sug\">$lang</div></a>";
            } else {
                $suggestion .= "<a href=$lang_value><div class=\"sug\">$lang</div></a>";
            }
        }
    }
}


echo $suggestion === "" ? "<h3 style=\"color: grey;\">No languages found.</h3>" : $suggestion;

?>

<style>
    .sug{
        margin:10px 15px 25px;
        background-color: #69e4a9;
        border: 2px solid lightseagreen;
        padding: 10px;
        width:60%;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    .sug:hover{
        background-color: lightseagreen;
        color: lightgray;
    }
</style>