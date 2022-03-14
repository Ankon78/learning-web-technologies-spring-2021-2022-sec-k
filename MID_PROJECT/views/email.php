<?php 
	
	//include('../controllers/placeCheck.php');
?>

<html>
<head>
	<title>EMAIL</title>
</head>
<body>
	<fieldset>
		<legend>Email</legend>
		<h4 align="right">
					    <a href="home.php">Back</a>|
					    <a href="../controllers/logout.php">Logout</a>
					</h4>
	<form method="POST" action="../controllers/emailCheck.php">
		<table border="1" align="center">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Your Name"></td>
			</tr>
			<tr>
				<td>Email Address</td>
				<td><input type="email" name="email" placeholder="Email address"></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><input type="text" name="message" placeholder="message"></td>
			</tr>
			
			<tr>
				
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" name="send" value="Send"></td>
			</tr>
		</table>
	</form>
	</fieldset>
</body>
</html>