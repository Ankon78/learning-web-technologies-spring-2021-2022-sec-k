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
	<title>Service provider</title>
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
    	background-image: url("hotel.jpg");
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
.serviceid{

position: absolute;
top: 8%;
left: 15%;
width: 25%;
height: 28px;
border-bottom: 2px solid ;
color:orange ;
font-size: 18px;
background: transparent;
border-radius: 8px;

}
	.service{

		position: absolute;
		top: 15%;
		left: 15%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:orange ;
        font-size: 18px;
        background: transparent;
        border-radius: 8px;
        
	}
	.company{
		position: absolute;
		top: 22%;
		left: 15%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:orange;
        font-size: 15px;
        background: transparent;
        border-radius: 8px;
	}
	.phone{
		position: absolute;
		top: 29%;
		left: 15%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:orange;
        font-size: 15px;
        background: transparent;
        border-radius: 8px;
	}
	.place{
		position: absolute;
		top: 36%;
		left: 15%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:orange;
        font-size: 15px;
        background: transparent;
        border-radius: 8px;
	}
	.other{
		position: absolute;
		top: 43%;
		left: 15%;
		width: 25%;
		height: 26px;
        border-bottom: 2px solid ;
        color:orange;
        font-size: 15px;
        background: transparent;
        border-radius: 8px;
	}
	
	.submit{
		position: absolute;
		top: 55%;
		left: 20%;
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
		top: 70%;
		left: 20%;
		width: 15%;
		height: 35px;
		color: whitesmoke;
	}
	#h3{
		position: absolute;
		top: 55%;
		left: 45%;
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
	<form method="POST" >

		<input id="serviceproviderno" type="text"class="serviceid" name="serviceproviderno" placeholder="Service Provider Id"><br>
		<input id="ServiceType" type="text"class="service" name="ServiceType" placeholder="service Type"><br>
		<input id="CompanyName" type="text"class="company" name="CompanyName" placeholder="companyName"><br>
		<input id="PhoneNo" type="text"class="phone" name="PhoneNo" placeholder="phone no"><br>
		<input id="Place" type="text"class="place" name="Place" placeholder="place"><br>
		<input id="OtherInfo" type="text"class="other" name="OtherInfo" placeholder="other info"><br>
		<input type="submit"class="submit" name="submit" onclick="ajaxinsertdata()" value="Submit">
				<br>
				<!-- <h1 id="h3">JS EXample</h1> -->
						<div class="error"><?=$error?>
                        </div>
		
	</form>
	</div>
	
	</div> 
	<script>
   
      
      function ajaxinsertdata(){
      	    let serviceproviderno = document.getElementById('serviceproviderno').value;
            let ServiceType = document.getElementById('ServiceType').value;
            let CompanyName = document.getElementById('CompanyName').value;
            let PhoneNo = document.getElementById('PhoneNo').value;
            let Place = document.getElementById('Place').value;
            let OtherInfo = document.getElementById('OtherInfo').value;
          
           var dataString ='serviceproviderno1=' + serviceproviderno + '&ServiceType1=' + ServiceType + '&CompanyName1=' + CompanyName + '&PhoneNo1=' + PhoneNo + '&Place1=' + Place + '&OtherInfo1=' + OtherInfo; 
           console.log (dataString); 
           if (serviceproviderno == '' || ServiceType == '' || CompanyName == '' || PhoneNo == ''|| Place == ''|| OtherInfo == '') {
                alert("Please Fill All Fields");
                } else {
                // AJAX code to submit form.\
                    
                    let http = new XMLHttpRequest();
                    http.open('POST', '../controllers/sProviderCheck.php', true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send(dataString);
                    http.onreadystatechange = function(){
                        
                        if(this.readyState == 4 && this.status == 200){
                            //document.getElementById('h3').innerHTML = this.responseText;
                            alert(this.responseText);
                        }
                        }
                        }
                    }


   
</script>
</body>
</html>