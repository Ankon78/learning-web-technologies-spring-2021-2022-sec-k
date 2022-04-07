<?php 
require "../models/placeModel.php";
   $conn=getConnection();
    $sql =$conn->prepare("SELECT * FROM  placetable");
    $sql->execute();
    $result=$sql->get_result(); 


    ?>

<html>
<head>
	<title>Place List</title>
</head>
<body>
      

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
    	background-image: url("update.jpg");
         filter: blur(6px);
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
    .update{
    	color:black;

    }
	
	.error{
		position: absolute;
		top: 25%;
		left: 70%;
		width: 15%;
		height: 35px;
		color: whitesmoke;
	}
	 table {
           width: 100%;
           border-collapse: collapse;
           position: absolute;
           top: 100px;
        }

        table, td, th {
           color: whitesmoke;
           border: 1px solid black;
           padding: 5px;
           background-color: orange;
        }

        th {
        	text-align: left;
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
	<form method="POST" action="">
		 <div class="update"><p>Update or Delete Available</p></div>
		<table>
			
			<tr>
				
				<td>Place Name</td>
				<td>Location</td>
				<td>Package</td>
				<td>Offer</td>
			    <td>Description</td>
			    <td>Action</td>
			    <td>Action</td>
			</tr>
			
			<tr>
			<?php 
             
             foreach ($result as $value) 
             {
             	 ?>
            
             <tr>
            <td><?php echo $value['placename'] ?></td>
            <td><?php echo $value['location'] ?></td>
				
				<td><?php echo $value['package']?></td>
				<td><?php echo $value['offer'] ?></td>
                <td><?php echo $value["description"] ?></td>

                
				<td><a href="../controllers/placeList_delete.php?id=<?php echo $value['id'] ?>">delete</a></td>    
				<td><a href="edit.php?id=<?php echo $value['id'] ?>">update</a></td>   


				
			</tr>
			
          
            <?php 
}
            ?>
     
        		

                      
        
       
                   
    

    
                    
		</table>

	</form>
	</div>
	
	</div> 
	
</body>
</html>
	
</body>
</html>