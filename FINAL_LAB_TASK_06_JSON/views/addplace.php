<?php 
	
	
    $error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "Fill all the fields.";
		}
	}
?>

<html>
<head>
	<title>AddPlace</title>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<style type="text/css">
	.body{
		background-image: url("");
		
		background-size: auto;
	}
	.naviation{
		background-color: #6b6967;
        overflow: hidden;
        position: absolute;
		top: 0%;
		right: 0%;
		bottom: 14%;
		left: 0%;
		 
	}
	.naviation a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 0px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .naviation a:hover {
        background-color: #ddd;
        color: black;
    }
    .naviation a.active {
        background-color: #04AA6D;
        color: white;
    }
    .SBoyyy{
        font-family: "Audiowide", sans-serif;
        /*font-size: 100%;*/
        font-style: italic;
        font-weight: bolder;
        color: rgb(20, 11, 29);
    }
    .form{
    	color:#de8621;
    	background-image: url("addplaceBackground.jpg");
    	background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
		text-align: center;
		font-family: 'Montserrat';
		font-size: 40px;
		position: absolute;
		top: 15%;
		right: 0%;
		bottom: 0%;
		left: 0%;
		
    }
    input::placeholder {
       color: white;
       font-size: 1.2em;
       font-style: italic;
}
	.name{

		position: absolute;
		top: 15%;
		left: 40%;
		width: 25%;
		height: 28px;
		border: none;
        border-bottom: 2px solid ;
        color:#de8621 ;
        font-size: 18px;
        background: transparent;
        
	}
	.location{
		position: absolute;
		top: 22%;
		left: 40%;
		width: 25%;
		height: 28px;
		border: none;
        border-bottom: 2px solid ;
        color:#de8621;
        font-size: 15px;
        background: transparent;
	}
	.package{
		position: absolute;
		top: 29%;
		left: 40%;
		width: 25%;
		height: 28px;
		border: none;
        border-bottom: 2px solid ;
        color:#de8621;
        font-size: 15px;
        background: transparent;
	}
	.offer{
		position: absolute;
		top: 36%;
		left: 40%;
		width: 25%;
		height: 28px;
		border: none;
        border-bottom: 2px solid ;
        color:#de8621;
        font-size: 15px;
        background: transparent;
	}
	.image{
		position: absolute;
		top: 43%;
		left: 40%;
		width: 25%;
		height: 26px;
		border: none;
        border-bottom: 2px solid ;
        color:#de8621;
        font-size: 15px;
        background: transparent;
	}
	.description{
		position: absolute;
		top: 50%;
		left: 40%;
		width: 25%;
		height: 70px;
		border: none;
        border-bottom: 2px solid ;
        color:#de8621;
        font-size: 15px;
        background: transparent;
	}
	.submit{
		position: absolute;
		top: 65%;
		left: 45%;
		width: 15%;
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
	.error{
		position: absolute;
		top: 25%;
		left: 70%;
		width: 15%;
		height: 35px;
		color: whitesmoke;
	}
	

	
</style>
<script type = "text/javascript">
   
      // Form validation code .
      function validate() {
      
         if( document.myForm.placename.value == "" ) {
            alert( "Please provide place name!" );
            document.myForm.placename.focus() ;
            return false;
         }
		 if( document.myForm.location.value == "" ) {
            alert( "Please provide your location!" );
            document.myForm.location.focus() ;
            return false;
         }
         if( document.myForm.package.value == "" ) {
            alert( "Please provide your package" );
            document.myForm.package.focus() ;
            return false;
         }
          if( document.myForm.offer.value == "" ) {
            alert( "Please provide your offer!" );
            document.myForm.offer.focus() ;
            return false;
         }
          if( document.myForm.image.value == "" ) {
            alert( "Please provide image!" );
            document.myForm.image.focus() ;
            return false;
         }
          if( document.myForm.description.value == "" ) {
            alert( "Please provide your description!" );
            document.myForm.description.focus() ;
            return false;
         }

         return( true );
      }
   //-->
</script>
<body>
	<div class="body">
	<div class="naviation">
		<div><span class="SBoyyy" style="font-size:40px;color:orange;"><b>E</b></span><span class="SBoyyy"style="font-size: 20px; color:rgb(89, 240, 55);">asy Travels </span></div>
		 <h4 align="right">
                         
        	            <a  href="welcome.php">HOME</a>
					    <a href="addplace.php">ADD PLACE</a>
					    <a href="updateplace.php">UPDATE PLACE</a>
					    <a href="search.php">SEARCH</a>
					    <a href="placeList.php">PLACE LIST</a>
					    <a href="sProvider.php">SERVICE PROVIDER</a>
					    <a href="report.php">REPORT</a>
					    <a href="phone.php">PHONE</a>
					    <a href="email.php">EMAIL</a>
					    <a href="welcome.php">BACK</a>
					    <a href="../controllers/logout.php">LOGOUT</a>
					</h4>
	</div>
       
	   <div class="form">
	<form method="POST" action="../controllers/placeCheck.php" enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">

		<input type="text"class="name" name="placename" placeholder="name"><br>
		<input type="text"class="location" name="location" placeholder="location"><br>
		<input type="text"class="package" name="package" placeholder="package"><br>
		<input type="text"class="offer" name="offer" placeholder="offer"><br>
		<input type="file"class="image" name="image"><br>
		<input type="text"class="description" name="description" placeholder="description"><br>
		<input type="submit"class="submit" name="submit" value="Submit">
				<br>
				
						<div class="error"><?=$error?>
                        </div>
		
	</form>
	</div>
	
	</div> 
	
</body>
</html>