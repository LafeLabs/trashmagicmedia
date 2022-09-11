<?php

// copy from a url to a local file on server 

if(isset($_GET["from"]) && isset($_GET["to"])){
    $from = $_GET["from"];
    $to = $_GET["to"];
    copy($from,$to);
}


?>
<a href = "index.html">CLICK TO GO HOME</a>
<p></p>
<a href = "copy.html">BACK TO COPY PAGE</a>

<style>
body{
    background-color:black;
}
a{
    font-size:3em;
    color:#ff2cb4;
    font-family:courier;
}
</style>
