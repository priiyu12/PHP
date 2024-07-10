<?php
    //gets : take a line
    //getc : takes a character
    $fp = fopen("file.txt", "r");

    // Reading a file line by line
    while($a=fgets($fp))
    {
        echo $a;
    }
    echo "End of the file has been reached";
    echo "<br><br>";



    // Reading a file character by character
    while($a=fgetc($fp))
    {
        echo $a;
        // break;
    }
    echo "End of the file has been reached";
    echo "<br><br>";
    
    // Write a program which reads the content of a file until . has been encountered
    while($a = fgetc($fp))
    {
        echo $a;
        if($a == ".")
        {
            break;
        }
    }
    fclose($fptr);
    ?>