<?php
//for login purpose
session_start();


if(isset($_POST['login'])) 
{ 
  
   
   $email =$_POST['email']; 
   $password =$_POST['password']; 
  
   $_SESSION['pass']= $password ;
   $_SESSION['useremail']=$email;
    $db = mysqli_connect("localhost","root","","user");

    if (!$db) { 
      die("Connection failed: " . mysqli_connect_error()); 
    }

    $query="SELECT id , username , email FROM userinfo WHERE password='$password' ";
    $variable=mysqli_query($db,$query);
    $row=mysqli_fetch_assoc($variable);
    

    if(mysqli_num_rows(mysqli_query($db,$query))>0)
    {
       
        header("location:server.php"); 
    }

    else{
     echo "you may have missed something or incorrect password please check and try again....";
  }
  }
   
   
?> 