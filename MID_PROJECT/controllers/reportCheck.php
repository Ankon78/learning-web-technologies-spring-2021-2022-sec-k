<?php 
	session_start();


	
	if(isset($_REQUEST['submit'])){

		$id = $_REQUEST['id'];
		$report = $_REQUEST['report'];
		
		

		if($report != null  ){
			

			$user = $id."|".$report."\r\n";
			$file = fopen('../models/report.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/home.php');
			
		}else{
			echo "null submission";
		}
	}

?>