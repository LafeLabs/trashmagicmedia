<?php
//seed.php?replicatorurl=[replicator url]&pagename=[page name]

if(isset($_GET["replicatorurl"]) && isset($_GET["pagename"])){
    $replicatorurl = $_GET["replicatorurl"];//get replicatorurl
    $pagename = $_GET["pagename"];//get replicatorurl
    mkdir($pagename);
    copy($replicatorurl,$pagename."/replicator.php");
    echo "<a href = \"".$pagename."/replicator.php\">".$pagename."/replicator.php</a>";
}

else{
    echo("error<br><a href = \"index.html\">back to index.html</a>");
}



?>
<style>
    a{
        font-size:3em;
    }
</style>