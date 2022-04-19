<?php 

	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


	
	
	function addemail($ReportersId, $ReportersName, $ReportersPhoneNo, $ReportersEmail, $ReportTopic, $Details){
		$conn = getConnection();
		$sql = "insert into reports values('{$ReportersId}', '{$ReportersName}', '{$ReportersPhoneNo}', '{$ReportersEmail}', '{$ReportTopic}', '{$Details}')";

		echo $sql;

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
	

?>
 