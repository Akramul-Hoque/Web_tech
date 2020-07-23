<?php include('bloodbackend.php');?>
<!DOCTYPE html>
<html>
<head>
    <style>
    </style>
</head>
<body>

<form action="bloodbackend.php" method = "POST">

<div class="test"><span><b>BLOOD GROUP</b></span>
<div class="inputbox">
<select name="blood">
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select>
<?php echo $bl_error ?>
</div>
</div>
<hr>
<input type="submit">
</form>


</body>
</html>