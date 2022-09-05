<pre>
<?php

$scrollurl = file_get_contents("data/scrollurl.txt");

//if there is no / add one, but keep it if it already exists

copy($scrollurl,"data/scroll.txt");

//add "data/scroll.txt" to the source url
//copy the scroll to data/scroll.txt

echo($scrollurl);

?>
</pre>
<a href = "index.html">HOME</a>
<style>
body{
    background-color:black;
    color:#00ff00;
}
a{
    font-size:5em;
    color:#ff2cb4;
    font-family:courier;
}
</style>

