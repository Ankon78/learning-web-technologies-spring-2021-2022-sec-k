<?php
    
    $unameError = "";
    $username="";

    if(isset($_REQUEST['submit']))
    {
    	if ($_REQUEST['name']==null) {
    		$unameError="name is empty..";
    	}
    	else
    	{
    		$username=$_REQUEST['name'];
    	}
    }

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Name</title>
 </head>
 <body>
 	<form method="POST" action="">
 	<fieldset>
			<legend>NAME</legend>
			<table>
				<tr>
					<td>Name</td>
					
				</tr>
				<tr>
					
					<td><input type="text" name="name" value="<?=$username?>"><br></td>
					<td><?=$unameError?></td>
				</tr>
				<tr>
					
					<td><input type="submit" name="submit" value="Submit"><br></td>
				</tr>
			</table>
		
		
	</fieldset>
</form>
 
 </body>
 </html>