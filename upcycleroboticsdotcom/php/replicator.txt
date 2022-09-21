<?php

$dnaurl = "https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/upcycleroboticsdotcom/data/dna.txt";

if(isset($_GET["dna"])){
    $dnaurl = $_GET["dna"];
}


$baseurl = explode("data/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("data");
mkdir("php");
mkdir("jscode");
mkdir("scrolls");



copy("https://raw.githubusercontent.com/LafeLabs/trashmagicmedia/main/upcycleroboticsdotcom/php/replicator.txt","replicator.php");

foreach($dna->html as $value){
    
    copy($baseurl.$value,$value);

}


foreach($dna->data as $value){
    
    copy($baseurl."data/".$value,"data/".$value);
    
}


foreach($dna->php as $value){
 
    copy($baseurl."php/".$value,"php/".$value);
    copy($baseurl."php/".$value,explode(".",$value)[0].".php");

}

foreach($dna->scrolls as $value){
        
    copy($baseurl."scrolls/".$value,"scrolls/".$value);

}


foreach($dna->javascript as $value){
    copy($baseurl."jscode/".$value,"jscode/".$value);
}


?>
<a href = "index.html">CLICK TO GO TO PAGE</a>
<style>
a{
    font-size:3em;
}
</style>
