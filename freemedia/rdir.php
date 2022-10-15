<?php

// list files and or directories in a directory


$files = scandir(getcwd());

$dirs = [];

foreach($files as $value){
    if($value[0] != "." && is_dir($value)){
        array_push($dirs,$value."poop/");
    }
}

echo json_encode($dirs);



?>
