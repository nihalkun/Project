  <?php
  session_start();
//for login purpose

if(isset($_POST['adminlogin']))
{

   $emailId =$_POST['emailid'];
   $password =$_POST['password'];
   
  

    if($emailId=="admin@gmail.com" && $password=="admin"){

      $_SESSION['emailId']=$emailId;
    $db = mysqli_connect("localhost","root","","user");


    if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
    }


    $query="SELECT id , username, email FROM userinfo ";
    $variable= mysqli_query($db,$query);



    if(mysqli_num_rows($variable)>0) 
  {
      header("location:server2.php");
      }
    }

      else
      {
          echo "please enter correct username and password!";
  
        }
    }

  
?>