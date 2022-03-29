<?php 
	session_start();
	require('../models/placeModel.php');


	
	if(isset($_REQUEST['submit'])){

		//$id = $_REQUEST['id'];
		$placename = $_REQUEST['placename'];
		$location = $_REQUEST['location'];
		$package = $_REQUEST['package'];
		$offer = $_REQUEST['offer'];
		$description = $_REQUEST['description'];
		
		$src = $_REQUEST['image'];

		if($placename != null && $location != null && $package != null && $offer != null && $description != null && $src != null){
			
			$status=addplace($placename, $location, $package, $offer,$src,$description);
            if($status){
    			header('location: ../views/addplace.php');
    		}
    		else{
    			echo("Form not submitted");
    		}
		}
		else{
    		header('location: ../views/addplace.php?msg=error');
    	}
	}

?>