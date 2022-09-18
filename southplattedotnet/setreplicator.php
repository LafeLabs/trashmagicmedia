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
$seturl = "data/set.txt";

if(isset($_GET["set"])){
    $seturl = $_GET["set"];
}


$setraw = file_get_contents($seturl);
$set = json_decode($setraw);

foreach($set as $value){

    copy($value->url,$value->name);

}

    echo json_encode($set,JSON_PRETTY_PRINT);
    
?>
</pre>
<a href = "index.html">CLICK TO GO TO HOME</a>
<style>
a{
    font-size:3em;
}
</style>
