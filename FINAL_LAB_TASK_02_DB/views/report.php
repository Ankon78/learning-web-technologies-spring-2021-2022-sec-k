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
	<title>Report</title>
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
		bottom: 80%;
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
    	background-image: url("map.jpg"), url("report.jpg");
        background-position: right bottom, left top;
        background-repeat: no-repeat, repeat;
        background-size: 550px, 800px;
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
		top: 17%;
		left: 25%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:whitesmoke ;
        font-size: 18px;
        background: transparent;
        
	}
	
	.report{
		position: absolute;
		top: 25%;
		left: 25%;
		width: 30%;
		height: 80px;
        border-bottom: 2px solid ;
        color:navajowhite;
        font-size: 15px;
        background: transparent;
	}
	.submit{
		position: absolute;
		top: 45%;
		left: 25%;
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
		top: 63%;
		left: 55%;
		width: 15%;
		height: 35px;
		color: whitesmoke;
	}

	
</style>
<body>
	<div class="body">
	<div class="naviation">
		<div><span class="SBoyyy" style="font-size:40px;color:orange;"><b>E</b></span><span class="SBoyyy"style="font-size: 20px; color:rgb(89, 240, 55);">asy Travels </span></div>
		 <h4 align="right">
                         
        	            <a  href="">HOME</a>
					    <a href="addplace.php">ADD PLACE</a>
					    <a href="edit.php">UPDATE PLACE</a>
					    <a href="search.php">SEARCH</a>
					    <a href="placeList.php">PLACE LIST</a>
					    <a href="sProvider.php">SERVICE PROVIDER</a>
					    <a href="report.php">REPORT</a>
					    <a href="phone.php">PHONE</a>
					    <a href="email.php">EMAIL</a>
					    <a href="home.php">BACK</a>
					    <a href="../controllers/logout.php">LOGOUT</a>
					</h4>
	</div>
       
	   <div class="form">
	<form method="POST" action="../controllers/reportCheck.php">

		<input type="text"class="name" name="name" placeholder="name"><br>
		<input type="text"class="report" name="report" placeholder="report"><br>
		<input type="submit"class="submit" name="submit" value="submit">
				<br>
						<div class="error"><?=$error?>
                        </div>
		
	</form>
	</div>
	
	</div> 
	
</body>
</html>