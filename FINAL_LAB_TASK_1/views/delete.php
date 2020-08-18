<?php

require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['u_id'])) {
		$user = getByID($_GET['u_id']);	
	}else{
		header('location: all_users.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<h1>confirm delete</h1>
						<input type="submit" name="delete" value="delete"> 
						<a href="all_users.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>