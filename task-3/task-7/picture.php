<?php include('picturebakcend.php');?>
<!DOCTYPE html>
<html>
<head>
    <style>
        </style>
    </head>
    <body>
    <form action="picturebakcend.php" method="POST" enctype="multipart/form-data">
        <div class ="uid"><span><b>User id</b></span>

            <input type="number" name="number"min=0 value=""><br>
    <div class="test"><span><b>Profile Picture</b></span>
    <div class="inputbox">
    <img src=" " alt="Profile Picture"><br>
            <input type="file" name="file">
            </div>
            <?php echo $picerror ?>

           
        <hr>
        <div class="inputbox">
        <input type="submit" value="submit" name="submit" >
      
    </form>


</body>
</html>
