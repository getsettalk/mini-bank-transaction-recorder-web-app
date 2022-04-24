<?php
require("conn.php");
if (isset($_POST['dataFetch'])) {
  $data ='';
  $json_data ='';
  // for withdraw sum
  $sql = "SELECT SUM(total_amount) as totalDeposit FROM `all_rec` where txn_type =1";
  $run = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($run);
  $data = $row['totalDeposit'];
  echo number_format($data);
} else {
  echo " Dont found";
}

?>