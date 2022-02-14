<?php
    
    $unameError = "";
    $username="";

    if(isset($_REQUEST['submit']))
    {
    	if ($_REQUEST['email']==null) {
    		$unameError="Email is empty..";
    	}
    	else
    	{
    		$username=$_REQUEST['email'];
    	}
    }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email</title>
 </head>
 <body>
    <form method="POST" action="">
    <fieldset>
            <legend>EMAIL</legend>
            <table>
                <tr>
                    <td>Email</td>
                    
                </tr>
                <tr>
                    
                    <td><input type="email" name="email" value="<?=$username?>"><br></td>
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