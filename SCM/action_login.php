<?php
    session_start();
    $server = "localhost";
    $name = "root";
    $password = "";
    $con = mysqli_connect($server, $name, $password);

    if(!$con){
        echo "connection failed";
    }
    else{
        $userid = $_POST['userid'];
        $passwd = $_POST['password'];
        $class = $_POST['class'];
        $_SESSION['userids']=$userid;
        $sql = "SELECT * FROM `scm`.`login` WHERE `User_id` = '$userid' and `Password` = '$passwd' and `Class_id`='$class'";
        $result = $con->query($sql);
        $count = mysqli_num_rows($result);
        if($count>0){
                header('Location: ./user.php');
            }
        else{
            header("Location: ./error_page.php");
        }
    }
        ?>
        