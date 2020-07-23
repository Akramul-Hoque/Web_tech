<?php
$nameErr = "";
$name = "";  
//echo $_POST['name'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
function input_data($data) {  
  //$data = trim($data);  
 // $data = stripslashes($data);  
 // $data = htmlspecialchars($data);  
 // return $data;  
} 
    if (empty($_POST["name"])) {  
       echo  $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
           
            if (!preg_match("/^[a-zA-Z-]+[\s][a-zA-Z-]+$/",$name)) {  
              echo  $nameErr = "Requied at least two words,Must start with a letter,Can contain a-z or A-Z or dot(.) or dash(-)";  
            }  
    }  }
      

?>