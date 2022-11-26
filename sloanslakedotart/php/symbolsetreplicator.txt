<pre>
<?php


$localsymbolsetraw = file_get_contents("data/symbolset.txt");
$localsymbolset = json_decode($localsymbolsetraw);

$server = $localsymbolset->server;

$remotesymbolsetraw = file_get_contents($server."data/symbolset.txt");
$remotesymbolset = json_decode($remotesymbolsetraw);
$symbols = $remotesymbolset->symbols;

foreach($symbols as $value){

    copy($server."symbolfeed/".$value,"symbolfeed/".$value);

}

echo json_encode($symbols,JSON_PRETTY_PRINT);
    
?>
</pre>
<a href = "index.html">HOME</a>
<style>
a{
    font-size:3em;
}
body{
    font-size:1em;
    font-family:courier;
}
</style>
