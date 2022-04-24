<?php
require("php/conn.php");
//session_start();
unset($_SESSION["id"]);
unset($_SESSION["uname"]);
unset($_SESSION["auth"]);
session_destroy();
$conn->close();
echo " <script >
  window.location.href ='index.php';
      </script>";
?>