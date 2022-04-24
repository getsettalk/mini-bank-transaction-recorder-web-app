<?php
require("conn.php");
if (!empty($_POST['rid']) && isset($_POST['rid'])) {
  $rid = mysqli_real_escape_string($conn,$_POST['rid']);
  $sql ="DELETE FROM `all_rec` WHERE `all_rec`.`rec_id` = '$rid'";
  if (mysqli_query($conn,$sql)) {
    echo "Selected Record has been deleted !!!";
  }else {
    echo " Sorry! can't deleted";
  }
}else {
  echo "id not get";
}
$conn->close();
?>