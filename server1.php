<?php

if(isset($_POST['register']) ) 
{
    session_start();

    $user=$_POST['name'];

    $rollno=$_POST['rollno'];
    
    $email=$_POST['email'] ;
    
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    
    //for the registration purpose
    if($password!=$confirmpassword)
    {
        echo "Passwords are not same.";
        
    }
    
    $db = mysqli_connect("localhost","root","","user");
    $query="INSERT INTO `userinfo`( `Rollno.`,`username`, `password`, `email`) VALUES ('$rollno','$user','$password','$email')";

    if(mysqli_query($db,$query)){
        echo "you have succesfully registered ";
         
    }else{
        echo "Error" .$query. "<br>".mysqli_error($db);
    }

     mysqli_close($db);
}