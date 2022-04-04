<?php 

    session_start();
	require('../models/sProviderModel.php');
	
	if(isset($_REQUEST['submit'])){
		
		$serviceType = $_REQUEST['serviceType'];
		$companyName = $_REQUEST['companyName'];
		$phone = $_REQUEST['phone'];
		$place = $_REQUEST['place'];
		$otherInfo = $_REQUEST['otherInfo'];
		

		if($serviceType != null && $companyName != null && $phone != null && $place != null && $otherInfo != null ){
			
            $status=addservice($serviceType, $companyName, $phone, $place,$otherInfo);
            if($status){
    			header('location: ../views/sProvider.php');
    			
    		}
    		else{
    			echo("Form not submitted");
    		}
		}
		else{
    		header('location: ../views/sProvider.php?msg=error');
    	}
	}

?>