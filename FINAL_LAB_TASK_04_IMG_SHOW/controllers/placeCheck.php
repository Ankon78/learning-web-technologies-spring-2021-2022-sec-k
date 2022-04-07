<?php 
	session_start();
	require('../models/placeModel.php');


	
	if(isset($_REQUEST['submit'])){

		
		$placename = $_REQUEST['placename'];
		$location = $_REQUEST['location'];
		$package = $_REQUEST['package'];
		$offer = $_REQUEST['offer'];
		$description = $_REQUEST['description'];
		$file = $_FILES['image'];

		$filename=$file['name'];
		$filepath=$file['tmp_name'];
		$fileerror=$file['error'];

		if($fileerror == 0){
			$destfile='../uploads/'.$filename;

			move_uploaded_file($filepath, $destfile);
			

		if($placename != null && $location != null && $package != null && $offer != null && $destfile != null &&  $description != null ){
			
			$status=addplace($placename, $location, $package, $offer,$destfile,$description);
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
}

?>