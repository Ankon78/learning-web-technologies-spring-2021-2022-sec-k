<?php 
	session_start();
    require('../models/reportModel.php');

	
	if(isset($_REQUEST['submit'])){

		$name = $_REQUEST['name'];
		$report = $_REQUEST['report'];
		
		

		if($name != null && $report != null  ){
			

			$status=addemail($name, $report);
			 if($status){
    			header('location: ../views/home.php');
    		}
    		else{
    			echo("Form not submitted");
    		}
		}
		else{
    		header('location: ../views/report.php?msg=error');
    	}
	}

?>