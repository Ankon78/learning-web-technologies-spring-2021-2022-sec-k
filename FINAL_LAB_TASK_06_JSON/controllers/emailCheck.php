<?php 
	session_start();
    require('../models/emailModel.php');

	

	$data = $_POST['data'];
	$json = json_decode($data);

	$name=$json->name;
	$email=$json->email;
	$message=$json->message;
	

	
	$status=addemail($name, $email, $message);
			 if($status){
			 	echo "Submit Successful";
    			//header('location: ../views/home.php');
    		}
    		else{
    			echo("Form not submitted");
    		}
    	


?>