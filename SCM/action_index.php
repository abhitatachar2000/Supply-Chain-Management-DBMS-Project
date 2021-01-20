<?php
    error_reporting(0);
    $server = "localhost";
    $name = "root";
    $password = "";
    $con = mysqli_connect($server, $name, $password);

    if(!$con){
        echo "connection failed";
    }
    else{
        $id = $_POST['userid'];
        $name = $_POST['username'];
        $passwd = $_POST['password'];
        $class = $_POST['class'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $inventory_id = rand(1000,1000000);
        $catalogue_id = $inventory_id;

        $sql1 = "INSERT INTO `scm`.`user`(`User_id`, `Username`, `Class_id`, `Phone`, `Email`, `Location`) VALUES ('$id', '$name', '$class', '$phone', '$email', '$location');";
        $result1 = $con->query($sql1);
        $sql2 = "INSERT INTO `scm`.`login`(`User_id`, `Password`, `Class_id`) VALUES ('$id', '$passwd', '$class');";
        $result2 = $con->query($sql2);
        $sql3 = "INSERT INTO `scm`.`inventory`(`Inventory_id`, `User_id`) VALUES ('$inventory_id', '$id');";
        $result3 = $con->query($sql3);
        $sql4 = "INSERT INTO `scm`.`catalogue`(`Catalogue_id`, `User_id`) VALUES ('$catalogue_id', '$id');";
        $result4 = $con->query($sql4);
        $sql5 = "UPDATE `scm`.`user` SET `Inventory_id`= '$inventory_id',`Catalogue_id`='$catalogue_id' WHERE `User_id` = '$id';";
        $result5 = $con->query($sql5);
              
        if($result1 == true and $result2 == true and $result3 == true and $result4 == true and $result5 == true){
            header('Location: .\login.php');
        }
        else{
            echo "$con->error";
        }
        $con->close();
    } 
?>