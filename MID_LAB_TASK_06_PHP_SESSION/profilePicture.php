<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile Picture</title>
</head>
<body>
	<table border="1" width="50%">
		<tr height="70">
			<td colspan="2" align="right">
				<img src="aCompany.jpeg" align="left" width="100" height="70">
				<h4>Logged in as
				<a href="">Bob</a>&nbsp|
			    <a href="login.php">Logout</a>|</h4>
			    
			   
			</td>

		</tr>
		<tr height="200">
			<td width="300px"><h3>Account</h3><hr>
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="viewProfile.php">View Profile</a></li>
					<li><a href="editProfile.php">Edit Profile</a></li>
					<li><a href="profilePicture.php">Change Profile Picture</a></li>
					<li><a href="changePassword.php">Change Password</a></li>
					<li><a href="publicHome.php">Logout</a></li>
				</ul>
			</td>
			<td>
				 <form method="POST" action="">
             	<fieldset>
             		<legend>PROFILE PICTURE</legend>
             		<img id="blah" src="http://placehold.it/180" alt="your image" />
             		 <input type='file' onchange="readURL(this);" />


             		<hr>
					<input type="submit" name="submit" value="Submit">
				

             	</fieldset>
             </form>
			</td>
			
		</tr>
		<tr height="40">
			
			<td colspan="2" align="center">
				<h3>Copyright @2017</h3>
			</td>
		</tr>
		
	</table>

</body>
</html>