<?php
    
    $unameError = "";
    $username="";

    if(isset($_REQUEST['submit']))
    {
    	if ($_REQUEST['dateOfBirth']==null) {
    		$unameError="DateOfBirth is empty..";
    	}
    	else
    	{
    		$username=$_REQUEST['dateOfBirth'];
    	}
    }

 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <form method="POST" action="">
        <fieldset >
            <legend>DATE OF BIRTH</legend>
            <table>
                
                <tr>
                    
                    <td><input type="date" name="dateOfBirth" value="<?=$username?>">">
                        
                    </td>
                    <td><?=$unameError?></td>
                </tr>
                <tr>
                    
                    <td><input type="submit" name="submit" value="SUBMIT"><br></td>
                </tr>
            </table>
        
        
    </fieldset>
        
    </form>

</body>
</html>