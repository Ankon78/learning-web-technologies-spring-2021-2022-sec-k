<?php 
	
	include('../controllers/placeCheck.php');
?>

<html>
<head>
	<title>AddPlace</title>
</head>
<body>
	<fieldset>
		<legend>Add Place</legend>
        <h4 align="right">
					    <a href="home.php">Back</a>|
					    <a href="../controllers/logout.php">Logout</a>
					</h4>
	    
	<form method="POST" action="../controllers/placeCheck.php">
		<table align="center" border="1" width="70%" length="70px">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" placeholder="id"></td>
			</tr>
			<tr>
				<td>place Name</td>
				<td><input type="text" name="placename" placeholder="name"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location" placeholder="location"></td>
			</tr>
			<tr>
				<td>Package</td>
				<td><input type="text" name="package" placeholder="package"></td>
			</tr>
			<tr>
				<td>Offer</td>
				<td><input type="text" name="offer" placeholder="offer"></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td ><input type="text" name="description" value=""></td>
			</tr>
		
			<tr>
				<td></td>
				<td width="70%" length="70px"><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	</fieldset>
</body>
</html>