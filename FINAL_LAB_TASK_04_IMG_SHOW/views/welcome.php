<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>welcome</title>
	<style type="text/css">
	*{
			margin: 0;
			padding: 0;
			
		}	
	.body{
			background-image: url(welcome.jpg) ;
			height: 100vh;
			background-size: cover;
			background-position: center;
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
        padding: 10px 17px;
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
     .title{
       	position: absolute;
       	top: 62%;
       	left: 36%;
       	transform: translate(-50%,-50%);
       }
       .title h1{
       	color: floralwhite;
       	font-size: 51px ;
       }
	</style>
</head>
<body>
	<div class="body">
	<div class="naviation">
		<div><span class="SBoyyy" style="font-size:40px;color:orange;"><b>E</b></span><span class="SBoyyy"style="font-size: 20px; color:rgb(89, 240, 55);">asy Travels </span></div>
		 <h4 align="right">
                         
        	            <a  href="welcome.php">HOME</a>
					    <a href="addplace.php">ADD PLACE</a>
					    <a href="edit.php">UPDATE PLACE</a>
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
	<div class="title">
			<h1>WELCOME TO SERVICE PROVIDER...</h1>
		</div>
</div>


</body>
</html>