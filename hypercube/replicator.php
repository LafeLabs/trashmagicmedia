<?php

$dnaurl = "https://raw.githubusercontent.com/LafeLabs/hypercube/main/data/dna.txt";

if(isset($_GET["dna"])){
    $dnaurl = $_GET["dna"];
}


$baseurl = explode("data/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("data");
mkdir("php");
mkdir("jscode");
mkdir("iconsymbols");
mkdir("scrolls");
mkdir("symbolfeed");
mkdir("uploadimages");
mkdir("maps");
mkdir("media");
mkdir("cards");
mkdir("web");

copy("https://raw.githubusercontent.com/LafeLabs/hypercube/main/php/replicator.txt","replicator.php");

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

foreach($dna->scrolls as $value){
        
//    if($value == "home"){
    copy($baseurl."scrolls/".$value,"scrolls/".$value);
  //  }
    
}

foreach($dna->maps as $value){
        
    copy($baseurl."maps/".$value,"maps/".$value);

}

foreach($dna->web as $value){
        
    copy($baseurl."web/".$value,"web/".$value);

}


?>
<a href = "index.html">CLICK TO GO TO PAGE</a>
<style>
a{
    font-size:3em;
}
</style>
