<?php
session_start();
 $error = "";
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'error'){
            $error = "Fill all the fields.";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--     <script src="js/user-action.js"></script>
 -->    <title>Document</title>
    <style>
     
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
        background-image: url("search.jpg");
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
    .placename{
        position: absolute;
        top: 6%;
        left: 20%;
        width: 25%;
        height: 28px;
        color:whitesmoke;
        font-size: 20px;

    }
    .tour{

        position: absolute;
        top: 10%;
        left: 20%;
        width: 25%;
        height: 28px;
         color:black ;
        font-size: 20px;
        font-family: Georgia, serif;
        
    }
   
    
    .box{
       position: absolute;
        top: 22%;
        left: 20%;
        width: 25%;
        height: 28px;
        border-bottom: 2px solid ;
         border-radius: 25px;
        color:orange;
        font-size: 15px;
        background: transparent;
    }
    .search{
       position: absolute;
        top: 32%;
        left: 25%;
        width: 15%;
        height: 35px;
        border: 1px solid;
        background: #f59d38;
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
    #result{
        position: absolute;
        top: 43%;
        left: 20%;
        width: 50%;
        height: 35px;
       
        color: black;
        
       
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
    <form action="../controllers/searchCheck.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
         <div class="placename"><p>Available Tour Search</p></div>
        <div class="tour"><h4>SEARCH YOUR DESTINATION</h4></div>
             

        <input type="text"class="box" id="placename" name="placename" placeholder="placename" >

        <br> <br>
        <input type="submit" class="search" name="submit" value="Search">  <br> <br>
        <div id="result"><b>Place info will be listed here...</b></div>
        
        <div class="error"><?=$error?>
                        </div>

    </form>
    </div>
    
       
        
       





</div>
<script >
    var action = "../controllers/searchCheck.php";
     function Result(pform) {
         var xhttp = new XMLHttpRequest();
         xhttp.onload = function(){//call back function
         document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?placename=" +pform.placename.value);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send();
       }
              </script>


</body>
</html>