<?php
session_start();
unset($_SESSION['emailId']);
session_destroy();


header("location: admin.php");
?>