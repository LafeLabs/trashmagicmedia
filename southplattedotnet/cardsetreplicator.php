<pre>
<?php


$localcardsetraw = file_get_contents("data/cardset.txt");
$localcardset = json_decode($localcardsetraw);

$server = $localcardset->server;

$remotecardsetraw = file_get_contents($server."data/cardset.txt");
$remotecardset = json_decode($remotecardsetraw);
$cards = $remotecardset->cards;

foreach($cards as $value){

//    if($value != "home"){
        copy($server."cards/".$value,"cards/".$value);
  //  }

}

echo json_encode($cards,JSON_PRETTY_PRINT);
    
?>
</pre>
<a href = "index.html"><img src = "iconsymbols/home.svg" alt = "home"/></a>
<style>

</style>
