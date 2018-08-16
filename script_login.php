<?php
include "connection.php";
if (isset($_POST['uname'])) {
  $uname = $_POST['uname'];
  //echo $uname;
}
else {

}
if (isset($_POST['password'])) {
  $password = $_POST['password'];
  //echo $password;
}
else {

}

$query = "SELECT email, pwd FROM users WHERE email = '$uname' and pwd = '$password'";
$result = $conn->query($query);
  if ($result == FALSE) {
      echo "ERROR: " . mysqli_error($conn);
}
else {
  $count = mysqli_num_rows($result);
  if ($count == 1) {
      echo "User Found.";
      echo $count;
}
else {
      echo "User not found.";
      header("Location:rempass.php?id=$uname");
}

}

?>
