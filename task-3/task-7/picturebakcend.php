 <?php
     $picerror="";
     $iderror="";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
function input_data($data) {  
 
} 
    if (empty($_POST["number"])) {  
       echo $iderror = " ID is required" ."<br>";  
    } else {  
        $number = input_data($_POST["number"]);  
           
           
              echo  $iderror = "sucessfull";  
            }  
    
      
     }

     if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));


    $allow = array('jpg','jpeg','png');
    if(!empty($fileName)){
    if (in_array($fileActualExt, $allow)) {
        if($fileError ===0){
            if($fileSize < 4194304){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDes = 'upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDes);
                $ppm = "Image sucessfully uploaded";
            }
        }
        else{
          echo  $picerror = "There was an error uploading your file!";
        }
    }
    else{
      echo  $picerror = "Only images are allowed (jpeg, jpg, png)";
    }
}
    else{
      echo  $picerror = "Please Select an image";
    }
 }
 ?>