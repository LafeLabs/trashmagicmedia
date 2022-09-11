<?php
//mkdir.php?dir=[dirname]

$dirname = $_GET["dir"];//get dir
mkdir($dirname);

if(isset($_GET["replicator"])){
    
    $replicatorurl = $_GET["replicator"];
    copy($replicatorurl,$dirname."/replicator.php");

}
else{
    copy("php/replicator.txt",$dirname."/replicator.php");    
}



echo "<a href = \"".$dirname."/replicator.php\">".$dirname."/replicator.php</a>";

?>
<style>
    body,a{
        font-size:2em;
        background-color:black;
        color:#ff2cb4;
        font-family:courier;
    }
</style>