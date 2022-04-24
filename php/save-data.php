<?php
require("conn.php");
$cname = mysqli_real_escape_string($conn,filter_var($_POST['Customer'],FILTER_SANITIZE_STRING));
$cid = mysqli_real_escape_string($conn,filter_var($_POST['cid'],FILTER_SANITIZE_STRING));
$txntype = mysqli_real_escape_string($conn,filter_var($_POST['txntype'],FILTER_SANITIZE_STRING));
$totalamt = mysqli_real_escape_string($conn,filter_var($_POST['totalamt'],FILTER_SANITIZE_STRING));
$Payingterm = mysqli_real_escape_string($conn,filter_var($_POST['Paying'],FILTER_SANITIZE_STRING));
$amtofpay = mysqli_real_escape_string($conn,filter_var($_POST['amtofpay'],FILTER_SANITIZE_STRING));
$sql;
if (!empty($cname)) {
  if (!empty($txntype)) {
    // now as per txntype tyoe define to case of insert query
    if ($txntype ==1) {
      $sql ="INSERT INTO `all_rec` (`rec_id`, `customer_name`, `customer_id`, `txn_type`, `total_amount`, `txn_date`, `txn_bye`, `txn_time`, `status`) VALUES (NULL, '$cname', '$cid', '$txntype', '$totalamt', '$date', '$userid', '$time', '1')";
      if($run = mysqli_query($conn,$sql)){
        // success
        echo 222;
      }else {
        //failed to insert
        echo 333;
    //  echo  $conn->error;
      }
      
    }else {
    //  echo $txntype;
       if ($amtofpay <= $totalamt) {
         $sql ="INSERT INTO `all_rec` (`rec_id`, `customer_name`, `customer_id`, `txn_type`, `total_amount`, `paid_amount`, `txn_date`, `txn_bye`, `txn_time`, `status`) VALUES (NULL, '$cname', '$cid', '$txntype', '$totalamt', '$amtofpay', '$date', '$userid', '$time', '1')";
      if($run =mysqli_query($conn,$sql) ){
        // success
        echo 222;
      }else {
        //failed to insert
        echo 333;
      }
       }else {
         echo "Error: Paying Amount must be less than and equal to Total Amount ?";
       }
      
    }
    
    
  }else {
    // empty data received 
    echo 999;
  }
}
?>