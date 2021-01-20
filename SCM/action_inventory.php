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
    $sql = "UPDATE `scm`.`inventory` SET `scm`.`inventory`.`Quantity`='$quantity', `scm`.`inventory`.`Product_id`='$prodid' where`scm`.`inventory`.`User_id`='$id';";
    $result = $con->query($sql);
    if ($result == true) {
        $sql2 = "UPDATE `scm`.`catalogue` SET `scm`.`catalogue`.`Quantity`=0, `scm`.`catalogue`.`Product_id`='$prodid' where`scm`.`catalogue`.`User_id`='$id';";
        $result2 = $con->query($sql2);
        if ($result2 == true) {
    ?>
        
        <script>
            alert("Inventory Successfully updated");
            window.location.href = "update_inventory.php";
        </script>
        
    <?php
    } 
    else {
    ?>
        <script>
            alert("Inventory Was not updated");
            window.location.href = "update_inventory.php";
        </script>

<?php
    }
}
}


?>