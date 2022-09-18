<pre>
<?php


$localmapsetraw = file_get_contents("data/mapset.txt");
$localmapset = json_decode($localmapsetraw);

$server = $localmapset->server;

$remotemapsetraw = file_get_contents($server."data/mapset.txt");
$remotemapset = json_decode($remotemapsetraw);

$maps = $remotemapset->maps;
$images = $remotemapset->images;
$scrolls = $remotemapset->scrolls;

foreach($maps as $value){

    copy($server."maps/".$value,"maps/".$value);

}

foreach($scrolls as $value){

    copy($server."scrolls/".$value,"scrolls/".$value);

}

foreach($images as $value){

    copy($server."uploadimages/".$value,"uploadimages/".$value);

}

echo json_encode($remotemapset,JSON_PRETTY_PRINT);
    
?>
</pre>
<a href = "index.html"><img src = "iconsymbols/home.svg" alt = "home"/></a>
<style>

</style>
