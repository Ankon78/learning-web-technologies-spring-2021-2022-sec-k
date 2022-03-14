<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		
		$id = $_REQUEST['id'];
		$placename = $_REQUEST['placename'];
		$location = $_REQUEST['location'];
		$package = $_REQUEST['package'];
		$offer = $_REQUEST['offer'];
		$description = $_REQUEST['description'];
		$src = $_REQUEST['image'];


	
			
			$file = fopen('../models/place.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line =$id."|".$placename."|".$location."|".$package. "|" .$offer."|".$description."|".$src."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../models/place.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/update.php');

		
	}
?>