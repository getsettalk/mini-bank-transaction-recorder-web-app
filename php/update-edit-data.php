<?php
require("conn.php");
if (!empty($_POST['Uid']) && isset($_POST['UCustomer'])) {
  $cname = mysqli_real_escape_string($conn,$_POST['UCustomer']);
  $uid = mysqli_real_escape_string($conn,$_POST['Uid']);
  $total = mysqli_real_escape_string($conn,$_POST['Utamt']);
  $paid = mysqli_real_escape_string($conn,$_POST['Upaid']);
  if ($paid > 0) {
    if ($paid <= $total) {
    $sql = "UPDATE `all_rec` SET `customer_name` = '$cname', `paid_amount` = '$paid' WHERE `all_rec`.`customer_id` ='$uid'";
    if (mysqli_query($conn,$sql) or die($conn->error)) {
      echo "success";
    }else {
      echo "failed";
    }
  }else {
    echo "wrong";
  }
  }else {
    echo " Please Enter Valid Amount";
  }
} else {
  // code...
  echo "No Data Received";
}

?>