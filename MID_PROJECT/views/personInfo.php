<?php 
	include('header.php');
	include('../controllers/pInfoCheck.php');
?>

<html>
<head>
	<title>PersonInfo</title>
</head>
<body>

	<form method="POST" action="../controllers/pInfoCheck.php" enctype="multipart/form-data">
		<fieldset>
			<legend>Person Profile</legend>
			<h4 align="right">
					    <a href="home.php">Back</a>|
					    <a href="../controllers/logout.php">Logout</a>
					</h4>
		<table border="1"width="50%" align="center">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="email address"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female
						<input type="radio" name="gender" value="others">Other</td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="date" name="date" value=""></td>
			</tr>
			<tr>
				<td>Blood Group</td>
				<td><select name="bloodGroup">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							
						</select></td>
			</tr>
			<tr>
				<td>Degree</td>
				<td><input type="checkbox" name="degree" value="SSC">SSC
						<input type="checkbox" name="degree" value="HSC">HSC
						<input type="checkbox" name="degree" value="BSc">BSc</td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit">
				    <input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>