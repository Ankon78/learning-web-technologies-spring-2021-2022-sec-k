<?php 
	
	require_once('../models/placeModel.php');

	if (isset($_REQUEST['update'])) {
		// code...
	
    $id = $_REQUEST['id'];
	$placename = $_REQUEST['placename'];
	$location = $_REQUEST['location'];
	$package = $_REQUEST['package'];
	$offer = $_REQUEST['offer'];
	$description = $_REQUEST['description'];
	$photo = $_REQUEST['photo'];
	
	$user = ['id'=>$id, 'placename'=>$placename, 'location'=>$location, 'package'=> $package , 'offer'=>$offer , 'description'=>$description , 'photo'=>$photo ];

	$status = editUser($user);

	if($status){
		header('location: ../views/placeList.php');
	}else{
		header('location: ../views/edit.php?placename='.$placename);
	}
 }
?>