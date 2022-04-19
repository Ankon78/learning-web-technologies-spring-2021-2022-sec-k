<?php
     
    session_start();
   require('../models/userModel.php');

    if(isset($_REQUEST['submit'])){
        
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];



      if($username != null && $password != null){

        $status = login($username, $password);
      	
       if($status){
                $_SESSION['status'] = 'true';
                setcookie('status', 'true', time()+3600, '/');
                header('location: ../views/welcome.php');
            }else{
                header('location: ../views/login.php?msg=error');
            }
       }
    }

?>