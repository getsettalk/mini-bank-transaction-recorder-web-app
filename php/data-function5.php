<?php
require("conn.php");
if (isset($_POST['dataFetch'])) {
  $data ='';
  
  // for low date finder in txn
  $sql = "SELECT MIN(txn_date) as minDay FROM `all_rec`";
  $run = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($run);
  $data = $row['minDay'];
  echo($data); 
} else {
  echo " Dont found";
}

?>