<pre>
<?php

$server = file_get_contents("data/feedsource.txt");
$remotefeedraw = file_get_contents($server."data/scrollset.txt");
$remotefeed = json_decode($remotefeedraw);
copy($server."data/geometroncoinfeed.txt","data/geometroncoinfeed.txt");

echo json_encode($scrolls,JSON_PRETTY_PRINT);
    
?>
</pre>
<a href = "magic.html">BACK TO MAGIC PAGE</a>
<style>

</style>
