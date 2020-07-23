<?php include('genderbackend.php');?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 



<form action="genderbackend.php" method = "Post">

    Gender

    <input type="radio" name="gender" value="Male">
    Male
    <input type="radio" name="gender" value="Female">
    Female
    <input type="radio" name="gender" value="Other">
    Other <br>
    <input type="submit"> <br>
    <?php echo $g_error ?>

</form>

</body>
</html>