<?php
$target_dir = "media/";
$files = scandir(getcwd()."/media");
$imageIndex =  count($files) - 1;
$infilename = basename( $_FILES["fileToUpload"]["name"]);
$extension = substr($infilename,-4);
//$target_file = $target_dir . "image" . $imageIndex . $extension;
$target_file = $infilename;
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
    $imageIndex +=  1;
   // $target_file = $target_dir . "image" . $imageIndex . $extension;
}
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "media/".$target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
}
else{
    echo "upload failed for some reason, possibly image size. Try screen shotting and uploading that(smaller) image.";    

}


?>

<p style = "font-size:5em">
    <a href = "index.html">home</a>
</p>
<p style = "font-size:5em">
    <a href = "mediadestroyer.html">media destroyer</a>
</p>

<p style = "font-size:5em">
    <a href = "picrust.html">picrust.html</a>
</p>


