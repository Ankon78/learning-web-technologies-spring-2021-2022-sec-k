<?php 

	$error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "invalid username/password";
		}
	}


?>
<html>
<head>
	<title>Login</title>
</head>
<style type="text/css">
	.body{
		color:black;
		background-size: 300px;
		background-color: skyblue;
		text-align: center;
		font-family: 'Montserrat';
		font-size: 30px;
		position: absolute;
		top: 20%;
		right: 35%;
		bottom: 20%;
		left: 35%;
		border-radius: 10px;
	}



	.login{
		padding-top: 5px;
		border-bottom: 1px solid;
		position: absolute;
		top: 10%;
		left: 42%;
		
	}
	.name{
		position: absolute;
		top: 25%;
		left: 26%;
		width: 50%;
		height: 25px;
		border: none;
        border-bottom: 2px solid ;
        font-size: 15px;
        background-color: skyblue;

	}
	.password{
		position: absolute;
		top: 32%;
		left: 26%;
		width: 50%;
		height: 25px;
		border: none;
        border-bottom: 2px solid ;
        font-size: 15px;
        background-color: skyblue;

	}
	.button{
		position: absolute;
		top: 40%;
		left: 26%;
		width: 50%;
		height: 25px;
		border: 1px solid;
		background: #18d68d;
        border-radius: 25px;
        font-size: 18px;
        color: whitesmoke;
        font-weight: 700;
        cursor: pointer;
        outline: none;
       
	}
	.signup{
		position: absolute;
		top: 45%;
		left: 25%;
        font-size: 20px;

	}
</style>
<script type = "text/javascript">
   
      // Form validation code .
      function validate() {
      
         if( document.myForm.username.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.username.focus() ;
            return false;
         }
		 if( document.myForm.password.value == "" || isNaN( document.myForm.password.value ) ||
            document.myForm.password.value.length != 3 ) {
            
            alert( "Please provide Longer Password" );
            document.myForm.password.focus() ;
            return false;
         }
         /*if( document.myForm.Email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.Email.focus() ;
            return false;
         }*/

         return( true );
      }
   //-->
</script>
<body>
	<div class="body">
	
	<form method="POST" action="../controllers/loginCheck.php" enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">
		<div class="login">login<br></div>
		<div class="form">
			<input type="text"class="name" name="username" placeholder="name"><br>
			<input type="password"class="password" name="password" placeholder="password"><br></div>
			<div class="submit">
			<input type="submit"class="button" name="submit" value="Submit">
			<br></div>
			<div class="signup">
					<p>For Registration <a href="reg.php">Signup </a></p>
				
						<br>
						<?=$error?>
						</div>

		</div>
		
	</form>
	
</body>
</html>