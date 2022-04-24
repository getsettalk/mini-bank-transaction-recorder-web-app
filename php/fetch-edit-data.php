<?php
require("conn.php");
$id = mysqli_real_escape_string($conn,$_POST['txnid']);
if (!empty($id)) {
  $sql = "SELECT * FROM `all_rec` where rec_id = '$id'";
  $run = mysqli_query($conn,$sql);
  if (mysqli_num_rows($run) >0) {
    $row = mysqli_fetch_assoc($run);
    if($row['txn_type'] ==1){ 
      echo "<span class=' alert-danger text-center fw-bold'>
      You Can't able to do changes in Deposit type transaction, you can only do changes in Withdraw type transaction in only Paid Amount !!!</span>";
      }else {
    ?>
      <form class="" id="updateForm">
        <div class="text-center">
          <?php if($row['txn_type'] ==1){ echo "<span style='color:rgb(46,244,17); font-weight:bold;'>Txn. type: Deposit </span>"; }else {echo "<span style='color:rgb(255,86,54); font-weight:bold;'>Txn. type: Withdraw </span>";} ?> 
        </div>
        <div class="mt-2">
          <label for="UCustomer">Customer name:</label>
          <input type="text" name="UCustomer" id="UCustomer" class="form-control" placeholder="Enter Customer Name" value="<?php echo $row['customer_name']; ?>" />
        </div>
        
        <div class="mt-2">
          <label for="Uid">Aadhar/Account number:</label>
          <input type="number" name="Uid" id="Uid" placeholder="Account Number" class="form-control" readonly value="<?php echo $row['customer_id']; ?>"/>
        </div>
        <div class="mt-2">
          <label for="Utamt">Total Withdraw Amount:</label>
          <input type="number" name="Utamt" id="Utamt" placeholder="Total Amount" class="form-control" value="<?php echo $row['total_amount']; ?>" readonly="readonly"/>
        </div>
        
        <div class="mt-2 <?php if($row['txn_type'] ==1){ echo "d-none"; } ?>">
          <label for="Upaid">Paid Amount:</label>
          <input type="number" name="Upaid" id="Upaid" placeholder="Enter Paid Amount" class="form-control" value="<?php echo $row['paid_amount']; ?>"/>
        </div>
        <div class="text-center">
          <button class="btn btn-warning mt-2" type="button" id="updateData" >Update now</button>
        </div>
      </form>
    <?php
  } }else {
    echo "No found !!!";
  }
}
?>