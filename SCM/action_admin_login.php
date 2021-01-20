<?php
    session_start();
    error_reporting(0);
    $server = "localhost";
    $name = "root";
    $password = "";
    $con = mysqli_connect($server, $name, $password);

    if (!$con) {
        echo "connection failed";
    }
    else{
        $adminid = $_POST['adminid'];
        $passwd = $_POST['password'];
        $_SESSION['Admin_id'] = $adminid;
        $sql = "SELECT * FROM `scm`.`admin_login` where `Admin_id` = '$adminid' and `Password` = '$passwd';";
        $result = $con->query($sql);
        $count = mysqli_num_rows($result);
        if($count>0){
            header("Location:./admin.php");
        }
        else{
            header('Location: ./error_page.php');
        }
    }
?>
