<?php 
	include('header.php');
?>

<html>
<head>
	<title>Place List</title>
</head>
<body>
	<fieldset>
		<legend>Update place</legend>

	<h4 align="right">
					    <a href="home.php">Back</a>|
					    <a href="../controllers/logout.php">Logout</a>
					</h4>
		<table border="1" align="center" width="40%" length="40%">
			<tr>
				<td>Id</td>
				<td>Place Name</td>
				<td>Location</td>
				<td>Package</td>
				<td>Offer</td>
				<td>Description</td>
				<td>Image</td>
				<td>Action</td>
				
			</tr>

			<?php 
				$file = fopen('../models/place.txt', 'r');
				
				while (!feof($file)) {
					$user = fgets($file);
					if($user == null){
						break;
					}
					
					$userArray = explode("|", $user);
			?>

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[2]?></td>
				<td><?=$userArray[3]?></td>
				<td><?=$userArray[4]?></td>
				<td><?=$userArray[5]?></td>
				<td><?=$userArray[6]?></td>
				
				
			
				<td>
					<a href="../views/edit.php?id=<?=$userArray[0]?>"> EDIT </a> | 
					<a href="../views/delete.php?id=<?=$userArray[0]?>"> DELETE </a>  
				</td>
			</tr>

			<?php
				}
			?>
			
			
			
		</table>
		</fieldset>
	</form>
	</fieldset>
</body>
</html>