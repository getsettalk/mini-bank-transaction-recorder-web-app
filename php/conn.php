<?php
session_start();
if (!isset($_SESSION['auth'])) {
  ?>
  <script >
    window.location.href ="../logout.php";
  </script>
  <?php
  //header("location:../logout.php");
} else {

  // changes here database connection 

$conn =  mysqli_connect("localhost:3306","root","root","Banking_app") or die($conn->connect_error);


$date = date("d/m/Y");
date_default_timezone_set('Asia/Kolkata'); 
$time = date("h:i:sa");
$userid = $_SESSION["id"];
$username = $_SESSION["uname"];


}

// do not  remove this line 
// this csc/mini bank transaction recorder app has been created by sujeet kumar (getsettalk) git 
  
?>