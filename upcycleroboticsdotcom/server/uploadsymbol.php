<?php
$target_dir = "symbolfeed/";
$files = scandir(getcwd()."/symbolfeed");
$imageIndex =  count($files) - 1;
$infilename = basename( $_FILES["fileToUpload"]["name"]);
$extension = substr($infilename,-4);
//$target_file = $target_dir . "symbol" . $imageIndex . $extension;
$target_file = $infilename;

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
    $imageIndex +=  1;
    $target_file = $target_dir . "symbol" . $imageIndex . $extension;
}
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "symbolfeed/".$target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
}
else{
    echo "upload failed for some reason";    
}


?>
<p style = "font-size:5em">
    <a href = "symbolfeed.html">BACK</a>
</p>


