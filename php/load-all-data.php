<?php
require("conn.php");
// this page is only for show liminted data when data saved 
$sql="SELECT * FROM `all_rec` order by rec_id desc LIMIT 10";
$run = mysqli_query($conn,$sql);
if (mysqli_num_rows($run) >0) {
  ?>
   <div class="table-responsive mt-3">
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
      </tr>
      <?php
      while($row = mysqli_fetch_assoc($run)){
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
      </tr>
   <?php } ?>
      </table>
    </div>
      
  <?php
} else {
  echo "<div class='alert alert-warning text-center'>Don't have recorded any data yet !!!</div >";
}

?>