<?php include('datebackend.php');?>
<!DOCTYPE html>
<html>
<head>
    <style 
 
    ></style>
    <title></title>
</head>

<body>
 



<form action="datebackend.php" method = "post">

    <div class="test"><span><b>DATE OF BIRTH</b></span>
    <div class="inputbox">
    
    <input type="number" name="day" min="1" max="31"> / <input type="number"
    name="month" min="1" max="12"> / <input type="number" name="year" min="1900" max="2016">
    <?php echo $d_error?>
    <hr>
    <input type="submit" >

</div>
</div>


</form>

</body>
</html>