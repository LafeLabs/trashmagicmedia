<?php


$dnaurl = "https://raw.githubusercontent.com/LafeLabs/thing/master/data/dna.txt";

if(isset($_GET["from"])){
    $fromurl = $_GET["from"];
    $dnaurl = $fromurl."/data/dna.txt";
}


$baseurl = explode("data/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);


//copy($baseurl."data/currentMap.txt","data/currentMap.txt");

foreach($dna->maps as $value){
    copy($baseurl."maps/".$value,"maps/".$value);
}

foreach($dna->scrolls as $value){
    copy($baseurl."scrolls/".$value,"scrolls/".$value);
}

foreach($dna->data as $value){
    copy($baseurl."data/".$value,"data/".$value);
}


?>
<a href = "index.html">CLICK TO GO TO MAIN PAGE</a>
<style>
a{
    font-size:3em;
}
</style>
