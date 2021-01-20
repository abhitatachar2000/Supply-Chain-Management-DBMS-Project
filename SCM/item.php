<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/item.css?version51">
    <title>Document</title>
</head>

<body>

    <h1 style="font-size:45px; color:white; text-align:center;">Search for a product</h1><br>
    <hr>
    <div class="containers">
        <form action="#" method="POST">
            <label for="prodid">Product id:</label>
            <input type='text' name='productid' id='productid' placeholder='productid' style="width: 300px;" required><br><br>
            <button type='submit' class='submit' onclick="myfunction()">Submit</button><br>
            <br>
        </form>
    </div>
    <center>
        <table id='Product_table'>
            <tr class="border_bottom">
                <th>User_id</th>
                <th>User Name</th>
                <th>Catalogue_id</th>
                <th>Catalogue Quantity</th>
                <th>Inventory_id</th>
                <th>Total Quantity</th>
            </tr>
    </center>
    <?php
    error_reporting(0);
    $server = "localhost";
    $name = "root";
    $password = "";
    $con = mysqli_connect($server, $name, $password);
    if (!$con) {
        echo "connection failed";
    } else {
        $prodid = $_POST['productid'];
        //echo $prodid;
        $sql = "Select `scm`.`user`.`User_id`, `scm`.`user`.`Username`, `scm`.`catalogue`.`Catalogue_id`, `scm`.`catalogue`.`Quantity`, `scm`.`inventory`.`Inventory_id`, `scm`.`inventory`.`Quantity` Total from scm.user JOIN scm.catalogue on catalogue.User_id = user.User_id JOIN scm.inventory on inventory.User_id = user.User_id where catalogue.Product_id = '$prodid'";
        $result = $con->query($sql);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["User_id"] . "</td><td>" . $row["Username"] . "</td><td>" . $row["Catalogue_id"] . "</td><td>" . $row["Quantity"] . "</td><td>" . $row["Inventory_id"] . "</td><td>" . $row["Total"] . "</td></tr>";
            }
        }
    }
    ?>
    </table>
    <br>
    <button class="backbtn" onclick="window.location.href='./place_order.php'">Order</button>
   
</body>

</html>