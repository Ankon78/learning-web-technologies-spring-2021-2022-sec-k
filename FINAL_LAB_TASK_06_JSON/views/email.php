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
	<title>Email</title>
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
        
        font-style: italic;
        font-weight: bolder;
        color: rgb(20, 11, 29);
    }
    .form{
    	color:#de8621;
    	background-image: url("email.jpg");
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
		left: 50%;
		width: 25%;
		height: 28px;
		border: none;
        border-bottom: 2px solid ;
        color:#de8621 ;
        font-size: 18px;
        background: transparent;
        
	}
	.email{
		position: absolute;
		top: 25%;
		left: 50%;
		width: 25%;
		height: 28px;
		border: none;
        border-bottom: 2px solid ;
        color:#de8621;
        font-size: 15px;
        background: transparent;
	}
	
	.message{
		position: absolute;
		top: 35%;
		left: 50%;
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
		top: 55%;
		left: 55%;
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
		top: 65%;
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
	<form method="POST">

		<input id="name" type="text"class="name" name="name" placeholder="name"><br>
		<input id="email" type="text"class="email" name="email" placeholder="email"><br>
		<input id="message" type="text"class="message" name="message" placeholder="message"><br>
		<input type="submit"class="submit" name="send" onclick="ajaxinsertdata()" value="send">
				<br>
						<div class="error"><?=$error?>
                        </div>
		
	</form>
	</div>
	
	</div> 
	<script type = "text/javascript">
   
    
      function ajaxinsertdata(){

           let name1 = document.getElementById('name').value;
            let email1 = document.getElementById('email').value;
            let message1 = document.getElementById('message').value;
           
           let json = {
           	'name' :name1,
           	'email' :email1,
           	'message' :message1
           };

           let data = JSON.stringify(json);

            if (name1 == '' || email1 == '' || message1 == '') {
                alert("Please Fill All Fields");
                } 
                else{
                  let xhttp = new XMLHttpRequest();
                  xhttp.open('POST', '../controllers/emailCheck.php', true);
	               xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	               xhttp.send('data='+data);

	               xhttp.onreadystatechange = function (){
	               	if(this.readyState == 4 && this.status == 200){
			
			               alert(this.responseText);
			
		               }
	               }

                }

      }

   
</script>
	
</body>
</html>