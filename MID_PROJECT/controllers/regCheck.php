<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			

			$user = $username."|".$password."|".$email."\r\n";
			$file = fopen('../models/user.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/login.php');
			
		}else{
			echo "null submission";
		}
	}
?>