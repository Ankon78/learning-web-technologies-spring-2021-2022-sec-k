
<?php 
     include "../models/placeModel.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
          bottom: 85%;
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
    .blur{
        color:#de8621;
        background-image: url("../views/hotel.jpg");
         filter: blur(4px);
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
        font-size: 20px;
        position: absolute;
        top: 15%;
        right: 0%;
        bottom: 0%;
        left: 0%;
        
    }
    table {
           width: 100%;
           border-collapse: collapse;
           position: absolute;
           top: 50px;
        }

        table, td, th {
           color: whitesmoke;
           border: 1px solid black;
           padding: 5px;
           background-color: orange;

        }

        th {text-align: left;
        }

       
  </style>
  <body class="body">
    <div class="naviation">
    <div><span class="SBoyyy" style="font-size:40px;color:orange;"><b>E</b></span><span class="SBoyyy"style="font-size: 20px; color:#59f037;">asy Travels </span></div>
     <h4 align="right">
                         
                      <a  href="">HOME</a>
              <a href="../views/addplace.php">ADD PLACE</a>
              <a href="../views/updateplace.php">UPDATE PLACE</a>
              <a href="../views/search.php">SEARCH</a>
              <a href="../views/placeList.php">PLACE LIST</a>
              <a href="../views/sProvider.php">SERVICE PROVIDER</a>
              <a href="../views/report.php">REPORT</a>
              <a href="../views/phone.php">PHONE</a>
              <a href="../views/email.php">EMAIL</a>
              <a href="../views/home.php">BACK</a>
              <a href="../controllers/logout.php">LOGOUT</a>
          </h4>
  </div>
    
  

<?php 
    if(isset($_GET['placename']))
    
    // code...
  
    $allSearchedplacename = searchUser($_GET['placename']);

?> 
<div class="form">
<form>
    <table>
        <tr>
                
                <td>Place Name</td>
                <td>Location</td>
                <td>Package</td>
                <td>Offer</td>
                <td>Description</td>
                
                            </tr>
            <tr>
           
             <tr>
               <?php 
                 echo "<td>" . $allSearchedplacename['placename']  . "</td>";
                 echo "<td>" . $allSearchedplacename['location']  . "</td>";
                 echo "<td>" . $allSearchedplacename['package'] . "</td>";
                 echo "<td>" . $allSearchedplacename['offer'] . "</td>";
                 echo "<td>" . $allSearchedplacename['description'] . "</td>";
      

               ?>             
                   


                
            </tr>
            
          
    </table>
    
</form>
</div>

 
</body>
</html>
