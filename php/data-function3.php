<?php
require("conn.php");
if (isset($_POST['dataFetch'])) {
  //for get rest amount to pay customer
  $sql = "SELECT SUM(total_amount) as totalAmt FROM `all_rec` where txn_type =2";
  $run = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($run);
  $data = $row['totalAmt'];
  
  // for paidup amount
  $sql = "SELECT SUM(paid_amount) as totalPaid FROM `all_rec`";
  $run = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($run);
  $data1 = $row['totalPaid'];
  echo number_format($data - $data1);
} else {
  echo " Dont found";
}
$conn->close();
?>