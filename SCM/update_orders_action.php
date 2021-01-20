<?php
session_start();
$server = "localhost";
$name = "root";
$password = "";
$con = mysqli_connect($server, $name, $password);

if (!$con) {
    echo "connection failed";
} else {
    $id = $_SESSION['userids'];
    $orderid = $_POST['orderid'];
    $status = $_POST['status'];
    $sql = "UPDATE `scm`.`orders` SET `Status`='$status' WHERE `Order_id`='$orderid'";
    $result = $con->query($sql);
        if ($result == true) {
?>
        <script>
            alert("Updated Successfully");
            window.location.href = "./update_orders.php";
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("Update Not Successful");
            window.location.href = "./update_orders.php";
        </script>

<?php
    }
}

?>