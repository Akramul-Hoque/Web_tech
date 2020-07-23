
<?php
 $g_error = "";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST["gender"])) 
        {
         echo $g_error = "Select a gender";

      }
      else
       {
        echo  $g_error = "Your gander is ".$_POST["gender"];
       }

    }



?>