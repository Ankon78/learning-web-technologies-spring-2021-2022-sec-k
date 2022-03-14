<?php 
	include('header.php');
?>

<html>
<head>
	<title>Place List</title>
</head>
<body>

	<a href="home.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

		<table border="1" align="center" width="70%">
			<tr length="70px">
				<td>id</td>
				<td>Place Name</td>
				<td>Location</td>
				<td>Package</td>
				<td>Offer</td>
				<td>Description</td>
				<td>Image</td>
				
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
			
			<!-- 	<td>
					<a href="edit.php?id=<?=$userArray[0]?>"> EDIT </a> | 
					<a href="delete.php?id=<?=$userArray[0]?>"> DELETE </a>  
				</td> -->
			</tr>

			<?php
				}
			?>
			
			
			
		</table>
		</fieldset>
	</form>
</body>
</html>