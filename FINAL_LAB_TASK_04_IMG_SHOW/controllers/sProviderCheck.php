<?php 

    session_start();
	require('../models/sProviderModel.php');
	
	if(isset($_REQUEST['submit'])){
		
		$ServiceType = $_REQUEST['ServiceType'];
		$CompanyName = $_REQUEST['CompanyName'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$Place = $_REQUEST['Place'];
		$OtherInfo = $_REQUEST['OtherInfo'];
		

		if($ServiceType != null && $CompanyName != null && $PhoneNo != null && $Place != null && $OtherInfo != null ){
			
            $status=addservice($ServiceType, $CompanyName, $PhoneNo, $Place,$OtherInfo);
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