<html>
<head>
	<title>Signup</title>
</head>
<body>
	<fieldset width="50%">
		<legend>Registration</legend>
	<form method="POST" action="../controllers/regCheck.php">
		
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		
	</form>
	</fieldset>
</body>
</html>
