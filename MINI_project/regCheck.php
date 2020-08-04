<?php
	session_start();

	if(isset($_POST['submit'])){

		$userid = $_POST['Id'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		if(empty($userid) || empty($password) || empty($email)){
			echo "null submission";
		}else {

			$file = fopen('user.txt', 'a');
			fwrite($file, $userid.'|'.$password.'|'.$email."/r/n");
			fclose($file);



			header('location: login.html');
		}

	}else{
		header("location: login.html");
	}


?>