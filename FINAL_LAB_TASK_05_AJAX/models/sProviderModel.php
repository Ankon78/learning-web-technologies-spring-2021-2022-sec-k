<?php 

		$dbuser = "root";
		$dbpass = "";
	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";

		$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		return $conn;
	}


	
	
	function addservice($serviceproviderno,$ServiceType, $CompanyName, $PhoneNo, $Place,$OtherInfo){
		$conn = getConnection();
		$sql = "insert into serviceprovider values('{$serviceproviderno}', '{$ServiceType}', '{$CompanyName}','{$PhoneNo}','{$Place}','{$OtherInfo}')";

		echo $sql;

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	/*function getAllUser(){
		$conn = getConnection();
		$userData = array(); 
		$sql="select * from placetable where username='{$username}'";
	    $result = mysqli_query($conn, $sql);
	    $user_result = mysqli_fetch_assoc($result); 
	      // if ($field === "uid") { 
		   //array_push($userData, $user_result['dp_user_id']); 
	       //} 
		    return $userData; 
	}

	function getUserById($id){
		$conn = getConnection();
	}

	function updateUser($user){
		$conn = getConnection();
	}
	function deleteUser($user){
		$conn= getConnection();
	}*/

?>
 