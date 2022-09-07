<?php

$branchname = $_POST["filename"];//get url

$files = scandir(getcwd()."/".$branchname);
$phpfiles = scandir(getcwd()."/".$branchname."/php");
$datafiles = scandir(getcwd()."/".$branchname."/data");
$jsfiles = scandir(getcwd()."/".$branchname."/jscode");
$uploadfiles = scandir(getcwd()."/".$branchname."/uploadimages");
$iconsymbols = scandir(getcwd()."/".$branchname."/iconsymbols");
$symbols = scandir(getcwd()."/".$branchname."/symbols");

unlink(getcwd()."/".$branchname."/symbol/replicator.php");
rmdir($branchname."/symbol");

foreach($phpfiles as $value){
    unlink($branchname."/php/".$value);
}
rmdir($branchname."/php");

foreach($datafiles as $value){
    unlink($branchname."/data/".$value);
}
rmdir($branchname."/data");

foreach($jsfiles as $value){
    unlink($branchname."/jscode/".$value);
}
rmdir($branchname."/jscode");

foreach($uploadfiles as $value){
    unlink($branchname."/uploadimages/".$value);
}
rmdir($branchname."/uploadimages");

foreach($iconsymbols as $value){
    unlink($branchname."/iconsymbols/".$value);
}
rmdir($branchname."/iconsymbols");

foreach($symbols as $value){
    unlink($branchname."/symbols/".$value);
}
rmdir($branchname."/symbols");


foreach($files as $value){
    unlink($branchname."/".$value);
}

rmdir($branchname);


?>