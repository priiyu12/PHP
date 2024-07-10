<?php
    //fp = file pointer set the cursor to starting of file.
    $fp = fopen("file.txt", "r"); //open the mentioned file
    //echo var_dump($fp);
    if(!$fp)
    {
        die("Unable to open this file. Please enter a valid filename");
    }
    $content = fread($fp, filesize("file.txt")); //copy the contents of file to variable
    fclose($fp); //close the file
    echo $content;
?>