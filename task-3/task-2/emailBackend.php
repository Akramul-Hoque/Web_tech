<?php
$n_error = "";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    if (empty($_POST["email"])) 
    {
    echo  $n_error = "Email is required";

       }
    else 
    {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
    {

    echo $n_error = "Invalid email format";

    }
    else{

    echo  $n_error = "submited";
    }


          }

    }

?>