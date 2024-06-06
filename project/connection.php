
<?php
  
   $join=  mysqli_connect("localhost","root","","halmashauri");

   if($join->connect_error){
     echo"connection error".$join->connect_error;
   }
   else{
      echo"";
   }
?>