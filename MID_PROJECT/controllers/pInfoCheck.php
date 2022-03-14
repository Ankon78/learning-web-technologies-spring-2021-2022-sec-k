<?php 


	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$date = $_REQUEST['date'];
		$bloodGroup = $_REQUEST['bloodGroup'];
		$degree = $_REQUEST['degree'];
		//$myfile = $_REQUEST['myfile'];
		//$src = $_FILES['image']['tmp_name'];
		$des = $_FILES['image']['name'];

		if($name != null && $email != null && $gender != null && $date != null && $bloodGroup != null && $degree != null && $des != null){
			

			$user = $name."|".$email."|".$gender."|".$date."|".$bloodGroup."|".$degree."|".$des."\r\n";
			$file = fopen('../models/personInfo.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/home.php');
			
		}else{
			echo "null submission";
		}
	}

?>