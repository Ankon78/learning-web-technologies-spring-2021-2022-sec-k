<?php 
	include('header.php');
	
	require('../models/placeModel.php');

	$id = $_REQUEST['id'];
	$user = getUserById($id);

	 $error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "Fill all the fields.";
		}
	}

	
?>

<html>
<head>
	<title>Edit Place</title>
</head>
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
		bottom: 84%;
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
     .blur{
    	   color:#de8621;
    	   background-image: url("edit.jpg");
         filter: blur(3px);
    	   background-repeat: no-repeat;
         background-attachment: fixed;
         background-position: center;
         background-size: cover;
	   text-align: center;
	   font-family: 'Montserrat';
	   font-size: 40px;
	   position: absolute;
	   top: 15%;
	   right: 0%;
	   bottom: 0%;
	   left: 0%;
    }
    .form{
    	      color:#de8621;
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
      .id{

		position: absolute;
		top: 10%;
		left: 40%;
		width: 25%;
		height: 28px;
		border: none;
        border-bottom: 2px solid ;
        color:whitesmoke ;
        font-size: 18px;
        background: transparent;
        
	}
	.name{

		position: absolute;
		top: 15%;
		left: 40%;
		width: 25%;
		height: 28px;
		border: none;
        border-bottom: 2px solid ;
        color:whitesmoke;
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
        color:whitesmoke;
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
        color:whitesmoke;
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
        color:whitesmoke;
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
        color:whitesmoke;
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
        color:whitesmoke;
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
	.data1{

		position: absolute;
		top: 10%;
		left: 37%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:whitesmoke ;
       
	}
	.data2{

		position: absolute;
		top: 15%;
		left: 30%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:whitesmoke ;
        
	}
	.data3{
		position: absolute;
		top: 22%;
		left: 32%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:whitesmoke ;
	}
	.data4{
		position: absolute;
		top: 28%;
		left: 33%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:whitesmoke ;
	}
	.data5{
		position: absolute;
		top: 36%;
		left: 35%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:whitesmoke ;
	}
	.data6{
		position: absolute;
		top: 53%;
		left: 30%;
		width: 25%;
		height: 26px;
		font-size: 25px;
		color:whitesmoke ;
	}
	.data7{
		position: absolute;
		top: 42%;
		left: 35%;
		width: 25%;
		height: 26px;
		font-size: 25px;
		color:whitesmoke ;
	}

	
</style>
<body>
    <div class="blur"></div>
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

	<form method="POST" action="../controllers/editCheck.php">
		<table>
			<tr> 
				<td class="data1">ID: </td>
				<td><input type="text" class="id" name="id" value="<?=$user['id']?>"><br></td>
			</tr>
			<tr>
				<td class="data2">Place Name: </td>
				<td><input type="text"class="name" name="placename" value="<?=$user['placename']?>"><br></td>
			</tr>
			<tr>
				<td class="data3">Location: </td>
				<td><input type="text"class="location" name="location" value="<?=$user['location']?>"><br></td>
			
			</tr>
			<tr>
				<td class="data4">Package: </td>
				<td><input type="text"class="package" name="package"value="<?=$user['package']?>"><br></td>
			</tr>
			<tr>
				<td class="data5">Offer: </td>
				<td><input type="text"class="offer" name="offer" value="<?=$user['offer']?>"><br></td>
			</tr>
			<tr>
				<td class="data6">Description: </td>
				<td><input type="text"class="description" name="description" value="<?=$user['description']?>"><br></td>
			</tr>
			<tr>
				<td class="data7">Photo: </td>
				<td><input type="file"class="image" name="photo"  value="<?=$user['photo']?>"><br></td>
			</tr>
		</table>
		
		
		
		<input type="submit"class="submit" name="update" value="update"><br>
		<div class="error"><?=$error?>
                        </div>

		
		
	</form>
</div>
</div>
</body>
</html>