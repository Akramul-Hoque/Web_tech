<?php include('degreebackend.php');?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="degreebackend.php" method="POST">


<div class="test"><span><b>DEGREE</b></span>
<div class="inputbox">
<input type="checkbox" name="degree[]" value="SSC">SSC
<input type="checkbox" name="degree[]" value="HSC">HSC
<input type="checkbox" name="degree[]" value="BSc">BSc

<?php echo $de_error?>


<br>




</div>
</div>

<input type="submit" >

</form>


</body>
</html>