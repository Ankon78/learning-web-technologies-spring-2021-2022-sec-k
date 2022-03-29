<html>
<head>
	<title>Login</title>
</head>
<body>
	<fieldset>
		<legend>Login</legend>
	<form method="POST" action="../controllers/loginCheck.php">
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="name"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="password"></td>
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