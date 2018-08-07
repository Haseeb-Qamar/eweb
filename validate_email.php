<?php
include "connection.php";
$check = $_GET['q'];
$sql = "SELECT email FROM users";
$result = $conn->query($sql);
$count = 0;
while ($test = $result->fetch_assoc()) {
  if ($test['email'] == $check) {
    $count++;
}

}
if ($count > 0 ) {
    echo "unavailable";
}
if ($count == 0) {
  echo "available";
}
?>
