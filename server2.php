<?php session_start();
if(isset($_SESSION['emailId'])&&$_SESSION['emailId']=="admin@gmail.com")
{
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
   
    <table class="table table-hover">

   
  <tbody>

 <thead>

    <tr>
      
    
   
   
      
    </tr>

  </thead>


  <thead>

    <tr>
      
    
      <th scope="col">id</th>

      <th scope="col">username</th>

      <th scope="col">email</th>
     
      <th scope="col"> <button > <a style="color:black" href='../admin calender/index.php'> view requests</a></button></th>

      <th scope="col"> <button><a href="adminlogout.php?logout='1'" > Logout</a></button></th>
      
    </tr>

  </thead>


<?php

$db = mysqli_connect("localhost","root","","user");


if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

$email= $_SESSION['emailId'];

$query="SELECT id , username, email FROM userinfo ";
$variable= mysqli_query($db,$query);

 while ( $row = mysqli_fetch_assoc($variable)) {
            
  echo  "<tr><td>" . $row["id"].  "</td><td>" .$row["username"]. " </td><td> ". $row["email"]. "</td></tr> ";
  
}
 

?>
 
  </tbody>

</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 
  </body>


</html>
<?php 
}
else{
header("location: admin.php");
}
?>