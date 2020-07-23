<?php

$de_error ="";

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     if (empty($_POST["degree"])|| count($_POST["degree"]) < 1) 
     {
    echo  $de_error = "At least one of them must be selected.";
    } else 
    {
      echo  $de_error = "submited ";}
    }


?>
