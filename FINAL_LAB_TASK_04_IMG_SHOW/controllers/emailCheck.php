<?php 
	session_start();
    require('../models/emailModel.php');

	
	if(isset($_REQUEST['send'])){
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];
		

		if($name != null && $email != null && $message != null ){
			

			$status=addemail($name, $email, $message);
			 if($status){
    			header('location: ../views/home.php');
    		}
    		else{
    			echo("Form not submitted");
    		}
		}
		else{
    		header('location: ../views/email.php?msg=error');
    	}
	}

?>