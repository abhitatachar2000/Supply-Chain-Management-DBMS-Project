<?php
session_start();
error_reporting(0);
$server = "localhost";
$name = "root";
$password = "";
$con = mysqli_connect($server, $name, $password);

if (!$con) {
    echo "connection failed";
} else {
    $id =$_SESSION['userids'];
    $passwd = $_session['password'];
    $sql = "DELETE FROM `scm`.`user` WHERE User_id= '$id';";
    $result = $con->query($sql);
    if ($result == true) {

        echo "<script>alert('Account Deleted'); window.location.href = 'index.php';</script>";

    } else {
        echo "<script>alert('Account not Deleted'); window.location.href = 'user.php';</script>";
    }
}

?>