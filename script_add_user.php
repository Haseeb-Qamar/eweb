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
if(isset($_POST['uname'])){
    $uname = $_POST['uname'];
}
$query = "INSERT INTO users (fn,ln,uname,pwd,email) values('$fn','$ln','$uname','$pwd','$email')";
$result = $conn->query($query);
    if ($result == FALSE){
        echo "ERROR: " . mysqli_error($conn);
    }else{
        session_start();
        $_SESSION['sfn'] = $fn;
        header("Location:new_user.php");
    }
?>
