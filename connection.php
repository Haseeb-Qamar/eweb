<?php
$conn = new mysqli('localhost','root','','eweb');
if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}
//echo "Connection Established.";
 ?>
