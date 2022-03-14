<?php 
	
	//include('../controllers/placeCheck.php');
?>

<html>
<head>
	<title>Report</title>
</head>
<body>
	<fieldset>
		<legend>Report</legend>
		<h4 align="right">
					    <a href="home.php">Back</a>|
					    <a href="../controllers/logout.php">Logout</a>
					</h4>
	<form method="POST" action="../controllers/reportCheck.php">
		<table border="1" align="center" width="40%" length="300%">
			<tr>
				<td>Report</td>
				
			</tr>
			<tr>
				<td> <input type="text" name="id" placeholder="id"></td>
				
			</tr>
			<tr>
				<td> <input type="text" name="report" placeholder="report"></td>
				
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Report"></td>
				
			</tr>
			
			
		</table>
	</form>
	</fieldset>
</body>
</html>