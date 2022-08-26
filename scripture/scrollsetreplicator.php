<pre>
<?php


$localscrollsetraw = file_get_contents("data/scrollset.txt");
$localscrollset = json_decode($localscrollsetraw);

$server = $localscrollset->server;

$remotescrollsetraw = file_get_contents($server."data/scrollset.txt");
$remotescrollset = json_decode($remotescrollsetraw);
$scrolls = $remotescrollset->scrolls;

foreach($scrolls as $value){

//    if($value != "home"){
        copy($server."scrolls/".$value,"scrolls/".$value);
  //  }

}

echo json_encode($scrolls,JSON_PRETTY_PRINT);
    
?>
</pre>
<a href = "index.html"><img src = "iconsymbols/home.svg" alt = "home"/></a>
<style>

</style>
