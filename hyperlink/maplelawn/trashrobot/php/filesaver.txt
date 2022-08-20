 <?php

    $data = $_POST["data"]; //get data 
    $filename = $_POST["filename"];
    $file = fopen($filename,"w");// create new file with this name
    fwrite($file,$data); //write data to file
    fclose($file);  //close file
?>