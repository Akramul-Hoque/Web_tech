<?php
 $bl_error = "";
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
       if(empty($_POST["blood"])){
   echo $bl_error = "Blood group can not be empty";
   }
   else{
         echo  $bl_error = "Your Blood group is ". $_POST["blood"];
        }
   }

?>