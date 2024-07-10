<?php
   $age = 67;
   
   if($age < 18)
   {
    echo"Not eligible for voting.";
   }
   elseif($age==18)
   {
    echo"Need updated documents for voting.";
   }
   elseif($age>18 && $age<45)
   {
    echo"Eligible for voting.";
   }
   else
   {
    echo"Need re-updation of documents";
   }
?>