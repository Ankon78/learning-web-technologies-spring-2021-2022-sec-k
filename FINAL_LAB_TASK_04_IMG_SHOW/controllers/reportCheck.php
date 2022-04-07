<?php 
	session_start();
    require('../models/reportModel.php');

	
	if(isset($_REQUEST['submit'])){

		$ReportersId = $_REQUEST['ReportersId'];
		$ReportersName = $_REQUEST['ReportersName'];
		$ReportersPhoneNo = $_REQUEST['ReportersPhoneNo'];
		$ReportersEmail = $_REQUEST['ReportersEmail'];
		$ReportTopic = $_REQUEST['ReportTopic'];
		$Details = $_REQUEST['Details'];
		
		

		if($ReportersId != null && $ReportersName != null && $ReportersPhoneNo != null && $ReportersEmail != null && $ReportTopic != null && $Details != null  ){
			

			$status=addemail($ReportersId, $ReportersName, $ReportersPhoneNo, $ReportersEmail, $ReportTopic, $Details);
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