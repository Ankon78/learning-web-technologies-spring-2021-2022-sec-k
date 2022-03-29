<?php
     
    session_start();
    $conn=mysqli_connect('localhost','root','','webtech');

    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

    if(isset($_REQUEST['submit'])){


        $sql="select * from mytable where username='$username' AND password='$password'";

      $result=mysqli_query($conn,$sql) or die(mysqli_error());

      if($result){
      	$row=mysqli_fetch_assoc($result);
      	$_REQUEST['username']= $row['username'];
      	$_SESSION['status'] = true;
		//$_SESSION['current_user'] = $userArry;
		setcookie('status', 'true', time()+3600, '/');
      	header('location: ../views/home.php');
      }
      else{
      	echo("wrong password or username");

      }
       
    }

?>