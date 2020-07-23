<?php
     $d_error = "";

              if($_SERVER["REQUEST_METHOD"]=="POST")
              {
                  if (empty($_POST["day"]) ||empty($_POST["day"])||
                   empty($_POST["day"])) 
                  {

               echo $d_error = "Birthday can not be empty";

                }

                else {

                echo $d_error = "Your Date of Birth is -" . $_POST["day"]." / ".$_POST["month"]." / ".$_POST["year"] ;

                     }

              }



?>
