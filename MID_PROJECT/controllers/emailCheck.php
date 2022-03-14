<?php 
	session_start();


	
	if(isset($_REQUEST['send'])){
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];
		

		if($name != null && $email != null && $message != null ){
			

			$user = $name."|".$email."|".$message."\r\n";
			$file = fopen('../models/email.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/home.php');
			
		}else{
			echo "null submission";
		}
	}

?>