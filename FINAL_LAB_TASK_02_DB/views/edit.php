<?php 
	include('header.php');
	
	require('../models/placeModel.php');

	$id = $_REQUEST['id'];
	$user = getUserById($id);

	
?>

<html>
<head>
	<title>Edit Place</title>
</head>
<body>

      <a href="update.php">Back</a>|
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controllers/editCheck.php">
		
		
		<fieldset>
			<legend>update place</legend>
		<table>
			
                  <tr>
				<td>Id</td>
				<td><input type="text" name="id" value="<?=$user['id']?>"></td>
			</tr>
			<tr>
				<td>place Name</td>
				<td><input type="text" name="placename" value="<?=$user['placename']?>"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="<?=$user['location']?>"></td>
			</tr>
			<tr>
				<td>Package</td>
				<td><input type="text" name="package"value="<?=$user['package']?>"></td>
			</tr>
			<tr>
				<td>Offer</td>
				<td><input type="text" name="offer" value="<?=$user['offer']?>"></td>
			</tr>
			
			<tr>
				<td>Description</td>
				<td><input type="text" name="description" value="<?=$user['description']?>"></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="photo"  value="<?=$user['photo']?>"></td>
			</tr>
		
			<tr>
				
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>