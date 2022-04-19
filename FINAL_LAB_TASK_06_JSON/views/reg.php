<?php 

	$error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "Fill all the blanks";
		}
	}


?>
<html>
<head>
	<title>Signup</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}
		header{
			background-image:linear-gradient(rgb(0,0,0,0.6),rgb(0,0,0,0.6)), url(reg.jpg) ;
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		.form{
       	max-width: 1200px;
       	margin: auto;
       }
        .username{

		position: absolute;
		top: 10%;
		left: 13%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:whitesmoke ;
        font-size: 15px;
        background: transparent;
        
	}
	.password{

		position: absolute;
		top: 17%;
		left: 13%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:whitesmoke ;
        font-size: 15px;
        background: transparent;
        
	}
	.firstname{

		position: absolute;
		top: 24%;
		left: 13%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:whitesmoke ;
        font-size: 15px;
        background: transparent;
        
	}
	.lastname{

		position: absolute;
		top: 31%;
		left: 13%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:whitesmoke ;
        font-size: 15px;
        background: transparent;
        
	}
	.gender{

		position: absolute;
		top: 38%;
		left: 13%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:whitesmoke ;
        font-size: 15px;
        background: transparent;
        
	}
	.email{
		position: absolute;
		top: 45%;
		left: 13%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:navajowhite;
        font-size: 15px;
        background: transparent;
	}
	.phone{
		position: absolute;
		top: 52%;
		left: 13%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:navajowhite;
        font-size: 15px;
        background: transparent;
		
	}
	.submit{
		position: absolute;
		top: 63%;
		left: 20%;
		width: 10%;
		height: 35px;
		border: 1px solid;
		background: #18d68d;
        border-radius: 25px;
        font-size: 18px;
        color: whitesmoke;
        font-weight: 700;
        cursor: pointer;
        outline: none;
	}
	.back{
		position: absolute;
		top: 63%;
		left: 13%;
		width: 4%;
		height: 35px;
		border: 1px solid;
		background: #18d68d;
        border-radius: 15px;
        font-size: 18px;
        color: whitesmoke;
        font-weight: 700;
        cursor: pointer;
        outline: none;
	}
	</style>
</head>
<body>
	<header>
	<script type="text/javascript">
		 // Form validation code .
      function validate() {
      
         if( document.myForm.username.value == "" ) {
            alert( "Please provide your username!" );
            document.myForm.username.focus() ;
            return false;
         }
		 if( document.myForm.password.value == "" || isNaN( document.myForm.password.value ) ||
            document.myForm.password.value.length != 3 ) {
            
            alert( "Please provide Longer Password" );
            document.myForm.password.focus() ;
            return false;
         }
         if( document.myForm.firstname.value == "" ) {
            alert( "Please provide your firstname!" );
            document.myForm.firstname.focus() ;
            return false;
         }
         if( document.myForm.lastname.value == "" ) {
            alert( "Please provide your lastname!" );
            document.myForm.lastname.focus() ;
            return false;
         }
         if( document.myForm.gender.value == "" ) {
            alert( "Please provide your gender!" );
            document.myForm.gender.focus() ;
            return false;
         }
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your email!" );
            document.myForm.email.focus() ;
            return false;
         }
          if( document.myForm.phone.value == "" ) {
            alert( "Please provide your phone!" );
            document.myForm.phone.focus() ;
            return false;
         }
         return( true );
      }
	</script>
	<div class="form">	
	<form method="POST" action="../controllers/regCheck.php"enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">
		
	    <input type="text" class="username" name="username" placeholder="username"><br>
	    <input type="password"class="password" name="password" placeholder="password"><br>
	    <input type="text" class="firstname" name="firstname" placeholder="firstname"><br>
	    <input type="text" class="lastname" name="lastname" placeholder="lastname"><br>
	    <input type="text" class="gender" name="gender" placeholder="gender"><br>
	    <input type="email" class="email" name="email" placeholder="email"><br>
	    <input type="text" class="phone" name="phone" placeholder="phone"><br>
	    <div class="back"><a href="login.php">Back</a></div>
	    <input type="submit" class="submit" name="submit" value="Submit">
				<br>
						<?=$error?>

		
		
	</form>
</div>
</header>	
</body>
</html>
