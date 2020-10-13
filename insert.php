<?php
require_once('../php7/server.php');
session_start();
//insert.php

$connect = new PDO('mysql:host=localhost;dbname=user', 'root', '');
{
if(isset($_POST["title"]))
{
    $useremail=$_SESSION['useremail'];
 $query = "
 INSERT INTO roombooking
 (username,title, start_event, end_event) 
 VALUES ('$useremail',:title, :start_event, :end_event)
 ";

 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end']
  )
 );
}
}

?>
