<?php 

		$dbuser = "root";
		$dbpass = "";
	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";

		$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		return $conn;
	}


	
	
	function addplace($placename, $location, $package, $offer,$destfile,$description){
		$conn = getConnection();
		$sql = "insert into placetable values('', '{$placename}', '{$location}','{$package}','{$offer}','{$destfile}', '{$description}')";

		/*echo $sql;*/

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$userData = array(); 
		$sql="select * from placetable where placename='{$placename}'";
	    $result = mysqli_query($conn, $sql);
	    $user_result = mysqli_fetch_assoc($result); 
	      // if ($field === "uid") { 
		   //array_push($userData, $user_result['dp_user_id']); 
	       //} 
		    return $userData; 
	}

	function getUserById($id){
		$conn = getConnection();
		$sql = "select * from placetable where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;

	}

	function editUser($user){
		$conn = getConnection();
		$sql = "update placetable set placename='{$user['placename']}', location='{$user['location']}', package='{$user['package']}' , offer='{$user['offer']}', description='{$user['description']}', photo='{$user['photo']}'where id={$user['id']}";
		
		//echo $sql;

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	function getTable(){
		$conn = getConnection();
		$userData = array(); 
		$sql="select * from placetable ";
	    $result = mysqli_query($conn, $sql);
	    $user_result = mysqli_fetch_assoc($result); 
	      // if ($field === "uid") { 
		   //array_push($userData, $user_result['dp_user_id']); 
	       //} 
		    return $userData; 

	 }
	function searchUser($placename){
    $conn=getConnection();
    $sql =$conn->prepare( "SELECT * FROM `placetable` WHERE placename = ?");
    $sql->bind_param("s",$placename);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
}

function deleteplace($id)
{
    $conn = getConnection();
    $sql = $conn->prepare("DELETE FROM placetable WHERE id=?");
    $sql->bind_param("i", $id);
    $respone = $sql->execute();
   $sql->close();
    $conn->close();
    return $respone;
}
?>
 