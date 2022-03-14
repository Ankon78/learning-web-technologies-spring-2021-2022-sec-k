<?php 
	include('header.php');

	$id = $_GET['id'];

	$file = fopen('../models/place.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode('|', $user);
		if($userArray[0] == $id){
			break;
		}
	}
?>

<html>
<head>
	<title>Delete Place</title>
</head>
<body>

    <a href="update.php">Back</a>|
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controllers/deleteCheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>update place</legend>
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" value="<?php echo $userArray[0] ?>"></td>
			</tr>
			<tr>
				<td>place Name</td>
				<td><input type="text" name="placename" value="<?php echo $userArray[1] ?>"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="<?php echo $userArray[2]?>"></td>
			</tr>
			<tr>
				<td>Package</td>
				<td><input type="text" name="package" value="<?php echo $userArray[3]?>"></td>
			</tr>
			<tr>
				<td>Offer</td>
				<td><input type="text" name="offer" value="<?php echo $userArray[4]?>"></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="image"  value="<?php echo $userArray[5]?>"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="description"  value="<?php echo $userArray[6]?>"></td>
			</tr>
		
			<tr>
				<td></td>
				<td><input type="submit" name="delete" value="Delete"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>