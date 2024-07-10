<?php
    echo"3D Arrays <br>";
    
    $multiDim = array(
                array(array(2,5,7,8),
                     array(1,2,3,1),
                     array(4,5,0,1)));
    
    for ($i = 0; $i < count($multiDim); $i++) 
    {
        for ($j = 0; $j < count($multiDim[$i]); $j++) 
        {
            foreach ($multiDim[$i][$j] as $key => $value) 
            {
                echo $value;
                echo " ";
            }
            echo "<br>";
        }
    }
?>