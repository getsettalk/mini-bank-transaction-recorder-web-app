<?php
// change here database configuration 
$conn =  mysqli_connect("localhost:3306","root","root","Banking_app");
$email = mysqli_real_escape_string($conn,$_POST['e']);
$pass = mysqli_real_escape_string($conn,$_POST['p']);
if (!empty($email) && !empty($pass)) {
  $sql ="SELECT * FROM `auth_user` where binary user_email  ='$email' And user_pass='$pass'";
 
  $run = $conn->query($sql) or die($conn->error);
    if (mysqli_num_rows($run) >0) {
      $row =mysqli_fetch_assoc($run);
      session_start();
      $_SESSION["id"]=$row['uid'];
   $_SESSION["uname"]=$row['user_name'];
   $_SESSION['auth'] = $row['uid'].$row['user_name'];
   
  echo "Success";
    }else {
      echo "failed";
    }
}else {
  echo "Don't accept empty data";
}
?>