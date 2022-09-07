<?php

// get the sha256 hash of a string input via data

if(isset($_GET["data"])){
    $data = $_GET["data"];//
}
else{
    $data = "";
}

echo hash('sha256',$data);

?>
