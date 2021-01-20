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
    $prodid = $_POST['productid'];
    $prodname = $_POST['productname'];
    $prodtype = $_POST['producttype'];
    $prodprice = $_POST['price'];

    $sql = "INSERT INTO `scm`.`product`(`Product_id`, `Product_name`, `Product_type`, `Price`) VALUES ('$prodid','$prodname','$prodtype','$prodprice')";
    $result = $con->query($sql);
    if($result == true) {
?>
        <script>
            alert("New Product Inserted Successfully");
            window.location.href = "new_product.php";
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("New Product Could not be inserted successfully");
            window.location.href = "new_product.php";
        </script>

<?php
    }
}


?>