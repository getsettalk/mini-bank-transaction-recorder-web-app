<?php
require("conn.php");
if (isset($_POST['dataFetch'])) {
  $data ='';
  $json_data ='';
  // for max date find in txn
  $sql = "SELECT Max(txn_date) as maxDay FROM `all_rec`";
  $run = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($run);
  $data = $row['maxDay'];
  echo($data); 
} else {
  echo " Dont found";
}

?>