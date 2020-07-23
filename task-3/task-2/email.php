
 <?php include('emailBackend.php');?><!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
   


 

     <form action="emailBackend.php" method="POST">

         Email 
         <input type="Email" name="email">
          <?php echo $n_error; ?><br>
        <input type="submit">

     </form>



</body>
</html>
