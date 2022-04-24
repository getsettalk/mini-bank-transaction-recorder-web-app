<?php
require("conn.php");
if (isset($_POST['dataFetch'])) {
  
  // for total txn sum
  $sql = "SELECT SUM(total_amount) as totaltxnsum FROM `all_rec`";
  $run = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($run);
  $data = $row['totaltxnsum'];
  echo number_format($data);
} else {
  echo " Dont found";
}
$conn->close();
?>