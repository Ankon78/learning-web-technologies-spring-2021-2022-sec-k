<?php 
	session_start();


	
	if(isset($_REQUEST['submit'])){

		$id = $_REQUEST['id'];
		$placename = $_REQUEST['placename'];
		$location = $_REQUEST['location'];
		$package = $_REQUEST['package'];
		$offer = $_REQUEST['offer'];
		$description = $_REQUEST['description'];
		//$degree = $_REQUEST['degree'];
		//$myfile = $_REQUEST['myfile'];
		//$src = $_FILES['image']['tmp_name'];
		$src = $_REQUEST['image'];

		if($id != null && $placename != null && $location != null && $package != null && $offer != null && $description != null && $src != null){
			

			$user = $id."|".$placename."|".$location."|".$package."|".$offer."|".$description."|".$src."\r\n";
			$file = fopen('../models/place.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/home.php');
			
		}else{
			echo "null submission";
		}
	}

?>