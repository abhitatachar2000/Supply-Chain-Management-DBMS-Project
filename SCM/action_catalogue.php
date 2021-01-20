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
    $id = $_SESSION['userids'];
    $prodid = $_POST['Product_id'];
    $quantity = $_POST['Quantity'];
    $sql = "UPDATE `scm`.`catalogue` SET `scm`.`catalogue`.`Quantity`='$quantity' where `scm`.`catalogue`.`User_id`='$id' and `scm`.`catalogue`.`Product_id`='$prodid';";
    $result = $con->query($sql);
    if ($result == true) {
?>

            <script>
                alert("Catalogue Successfully updated");
                window.location.href = "update_catalogue.php";
            </script>

        <?php
        } else {
        ?>
            <script>
                alert("Catalogue Was not updated");
                window.location.href = "update_catalogue.php";
            </script>

<?php
        }
    }

?>