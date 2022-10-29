<?php

// list files and or directories in a directory


$files = scandir(getcwd()."/images");

$dirs = [];
foreach($files as $value){
    if($value[0] != "."){
        array_push($dirs,$value);
    }
}

$jsontext = "images = ".json_encode($dirs).";";
$file = fopen("jscode/images.js","w");// create new file with this name
fwrite($file,$jsontext); //write data to file
fclose($file);  //close file

echo $jsontext;


?>
<a style = "font-size:3em" href ="editor.php">editor.php</a>