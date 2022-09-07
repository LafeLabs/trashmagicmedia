<pre>
<?php


/*
set.txt is an array of  JSON objects 

[
    {
        "name":"scrolls/bookofgeometron.md",
    "url":"https://raw.githubusercontent.com/LafeLabs/thing/master/scrolls/bookofgeometron.md"
    },
    {
        "name":"scrolls/civilizations.md",
        "url":"https://raw.githubusercontent.com/LafeLabs/thing/master/scrolls/civilizations.md"
    }
]

*/

//$seturl = "https://raw.githubusercontent.com/LafeLabs/thing/master/data/set.txt";
$seturl = "data/setserver.txt";

if(isset($_GET["setserver"])){
    $seturl = $_GET["setserver"];
}

$setserverraw = file_get_contents($seturl);
$setserver = json_decode($setraw);

$set = $setserver->set;
$server = $setserver->server;

foreach($set as $value){

    copy($server.$value->url,$value);

}

    echo json_encode($setserver,JSON_PRETTY_PRINT);
    
?>
</pre>
<a href = "index.html">CLICK TO GO TO HOME</a>
<style>
a{
    font-size:3em;
}
</style>
