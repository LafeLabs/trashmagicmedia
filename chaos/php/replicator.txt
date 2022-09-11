<?php

$dnaurl = "https://raw.githubusercontent.com/LafeLabs/chaos/main/data/dna.txt";

if(isset($_GET["dna"])){
    $dnaurl = $_GET["dna"];
}


$baseurl = explode("data/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("iconsymbols");
mkdir("data");
mkdir("php");
mkdir("jscode");
mkdir("uploadimages");
mkdir("symbolfeed");
mkdir("maps");
mkdir("scrolls");

copy("https://raw.githubusercontent.com/LafeLabs/chaos/main/php/replicator.txt","replicator.php");

foreach($dna->html as $value){
    
    copy($baseurl.$value,$value);

}

foreach($dna->javascript as $value){
    
    copy($baseurl."jscode/".$value,"jscode/".$value);

    
}

foreach($dna->iconsymbols as $value){
    
    copy($baseurl."iconsymbols/".$value,"iconsymbols/".$value);

    
}

foreach($dna->data as $value){
    
    copy($baseurl."data/".$value,"data/".$value);
    
}

foreach($dna->php as $value){
 
    copy($baseurl."php/".$value,"php/".$value);
    copy($baseurl."php/".$value,explode(".",$value)[0].".php");

}


foreach($dna->maps as $value){
    copy($baseurl."maps/".$value,"maps/".$value);
}

foreach($dna->scrolls as $value){
    copy($baseurl."scrolls/".$value,"scrolls/".$value);
}


?>
<a href = "index.html">CLICK TO GO TO PAGE</a>
<style>
a,body{
    font-size:3em;
    background-color:black;
    color:#ff2cb4;
    font-family:courier;
}
</style>
