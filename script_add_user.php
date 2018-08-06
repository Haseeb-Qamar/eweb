<?php

include "connection.php";
if(isset($_POST['fn'])){
    $fn = $_POST['fn'];
}
if(isset($_POST['ln'])){
    $ln = $_POST['ln'];
}
if(isset($_POST['pwd'])){
    $pwd = $_POST['pwd'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
$query = "INSERT INTO users (fn,ln,pwd,email) values('$fn','$ln','$pwd','$email')";
$result = $conn->query($query);
    if ($result == FALSE){
        echo "ERROR: " . mysqli_error($conn);
    }else{
        session_start();
        $_SESSION['sfn'] = $fn;
        header("Location:new_user.php");
    }
?>
