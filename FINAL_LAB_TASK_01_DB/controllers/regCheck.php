<?php
    
    $conn=mysqli_connect('localhost','root','','webtech');

    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $firstname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $gender=$_REQUEST['gender'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];

    if(isset($_REQUEST['submit'])){
    	if($username !=null && $password !=null && $firstname !=null && $lastname !=null && $gender !=null && $email !=null && $phone !=null){

    		$sql="insert into mytable(username,password,firstname,lastname,gender,email,phone) values('$username','$password','$firstname','$lastname','$gender','$email','$phone')";

    		$result=mysqli_query($conn,$sql) or die(mysqli_error());

    		if($result){
    			echo("Form submitted successfully");
    		}
    		else{
    			echo("Form not submitted");
    		}
    	}
    	else{
    		echo("All fields required");
    	}
    }

   




?> 