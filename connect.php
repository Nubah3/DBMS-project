<?php

   $con=new mysqli('localhost','root','','healthtrackingsystem');

   
   if(!$con){
    die(mysqli_error($con));
   }


?>