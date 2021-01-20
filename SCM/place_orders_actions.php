<?php
error_reporting(0);
session_start();
$server = "localhost";
$name = "root";
$password = "";
$con = mysqli_connect($server, $name, $password);
if (!$con) {
    echo "connection failed";
} else {
    $orderid = rand(10000, 1000000);
    $sql = "SELECT COUNT(Company_id) from scm.logistic_company";
    $result = $con->query($sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $row = $result->fetch_assoc();
        $count = $row['COUNT(Company_id)'];
    }
    echo "$count";
    $log = rand(1, $count);
    $placed_by = $_SESSION['userids'];
    $placed_to = $_POST['userid'];
    $prodid = $_POST['prodid'];
    $quantity = $_POST['quant'];
    $sql = "SELECT product.Price from scm.product where Product_id='$prodid';";
    $result = $con->query($sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $row = $result->fetch_assoc();
        $price = $row['Price'];
    }
    $total = $price * $quantity;
    $sqli = "INSERT INTO `scm`.`orders`(`Order_id`, `Placed_by`, `Placed_to`, `Product_id`, `Quantity`, `Price`, `Log_company_id`, `Status`) VALUES ('$orderid','$placed_by','$placed_to','$prodid','$quantity','$total','$log','Placed')";
    $result = $con->query($sqli);
    if ($result == true) {
    ?>
        <script>
            alert("Order Placed");
            window.location.href = "./place_order.php";
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("Order not placed");
            window.location.href = "./place_order.php";
        </script>

<?php
    }
}

?>