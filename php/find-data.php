<?php
require("conn.php");
$number = mysqli_real_escape_string($conn,$_POST['num']);
if (!empty($number)) {
  $sql = "SELECT * FROM `all_rec` where customer_id = '$number' order by rec_id desc";
  $run = mysqli_query($conn,$sql) or die($conn->error);
  $count =mysqli_num_rows($run);
  if ($count>0) {
     ?>
   <div class="table-responsive mt-3">
     <small class="text-success text-center"><?php echo $count; ?>Records found!!</small>
      <table id="customers">
      <tr>
        <th>S.N</th>
        <th>Customer-name</th>
        <th>Identification-number</th>
        <th >Txn-type</th>
        <th >Total Amount</th>
        <th >Paid Amount</th>
        <th >Rest-Amount</th>
        <th >Date</th>
        <th >Time</th>
        <th >Delete</th>
        <th >Edit</th>
      </tr>
      <?php
      
      for ($i = 1; $i <= $count; $i++) {
        
      $row =mysqli_fetch_assoc($run);
      ?>
      <tr>
        <td style="font-weight:500;"><?php echo $row['rec_id']; ?></td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row['customer_name']; ?></td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row['customer_id']; ?></td>
        <td style="text-align: center; vertical-align: middle;"><?php if( $row['txn_type'] ==1){ echo "<span class='bg-c-green-round'>Deposit <span>"; }else {echo "<span class='bg-c-yellow-round'>Withdraw<span>"; } ?></td>
        <td style="text-align: center; vertical-align: middle; color:#3204ad;"><?php echo "₹ ".number_format($row['total_amount']); ?></td>
        <td style="text-align: center; vertical-align: middle; color:#22a422;"><?php if(empty($row['paid_amount'])){ echo "-";}else {echo number_format($row['paid_amount']);} ?></td>
        <td style="text-align: center; vertical-align: middle; color:#fb4a12; font-weight:510;"><?php if(!empty($row['paid_amount'])){ if($row['total_amount'] == $row['paid_amount']){ echo "-"; }else{ echo "₹ ".number_format( $row['total_amount'] - $row['paid_amount']);}} else { echo "-";} ?></td>
        <td><?php echo $row['txn_date']; ?></td>
        <td><?php echo $row['txn_time']; ?></td>
        <td><button class="d-btn dtxn" type="button" data-id="<?php echo $row['rec_id']; ?>" ><span class="iconify" data-icon="fluent:delete-24-filled"></span></button></td>
        <td><button class="e-btn text-dark etxn" data-id="<?php echo $row['rec_id']; ?>"  type="button"><span class="iconify" data-icon="bxs:message-alt-edit"></span></button></td>
        
      </tr>
   <?php } ?>
      </table>
    </div
    <?php
  }else {
    echo "<div class='alert alert-danger text-center'> No record Found ?</div>";
  }
}
?>