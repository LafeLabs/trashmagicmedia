<?php

//delete all .php files.  

$keeploader = false;
//option is available to keep only fileloader.php and not saver--read but not write
if(isset($_GET["keeploader"])){
    $keeploader = true;//put into browser removephp.php?keeploader to keep loader but 
}

$files = scandir(getcwd());//get all the files in the current web directory

foreach($files as $value){//loop through the files
    if(!$keeploader){  
        //default option
        if(substr($value,-4) == ".php"){  //is it a .php file?
            unlink($value);  //unlink = delete
        }
    }
    else{  
        //if $keeploader boolean is set, only remove .php files that are *not* fileloader.php
        if(substr($value,-4) == ".php" && $value != "fileloader.php"){  //is it a .php file?
            unlink($value);  //unlink = delete
        }
    }
}
    
?>
<a style = "font-size:5em" href = "index.html">HOME</a>