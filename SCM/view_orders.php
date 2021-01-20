<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/orders_log.css?version51">
    <title>Order log</title>
</head>

<body>
    <h1 style="text-align : center; font-size:45px; color:white;">View Order Info </h1>
    <button type="button" class="backbtn" onclick="window.location.href='./user.php'">Back</button>
    <hr>
    <h3 style="text-align : center; font-size:25px; color:white;"> Placed Orders</h3>
    <div class="tableClass">
        <table id='info_table' class="rwd-table">
            <tr>
                <th>Order id</th>
                <th>Placed by</th>
                <th>Placed_to</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Logestics Company</th>
                <th>Status</th>
            </tr>
            <?php
            error_reporting(0);
            session_start();
            $id = $_SESSION['userids'];
            $server = "localhost";
            $username = "root";
            $password = "";
            $con = mysqli_connect($server, $username, $password);
            $row = 0;
            $sql = "SELECT O.Order_id, B.Username Placed_by, T.Username Placed_to, P.Product_name, O.Quantity, O.Price, L.Company_name, O.Status from scm.orders O inner join scm.user B on O.Placed_by = B.User_id inner join scm.user T on O.Placed_to = T.User_id inner join scm.product P on O.Product_id = P.Product_id inner join scm.logistic_company L on O.Log_company_id = L.Company_id Where O.Placed_by = '$id'";
            $result = $con->query($sql);
            $count = mysqli_num_rows($result);
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Order_id"] . "</td><td>" . $row["Placed_by"] . "</td><td>" . $row["Placed_to"] . "</td><td>" . $row["Product_name"] . "</td><td>" . $row["Quantity"] . "</td><td>" . $row["Price"] . "</td><td>" . $row["Company_name"] . "</td><td>" . $row["Status"] . "</td></tr>";
                }
            } else {
            ?>
                <tr>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                </tr>


            <?php
            }
            ?>
        </table>
        <br><br>
        <h3 style="text-align : center; font-size:25px; color:white;"> Got Orders</h3>
        <div class="tableClass">
            <table id='info_table' class="rwd-table">
                <tr>
                    <th>Order id</th>
                    <th>Placed by</th>
                    <th>Placed_to</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Logestics Company</th>
                    <th>Status</th>
                </tr>
                <?php
                error_reporting(0);
                session_start();
                $id = $_SESSION['userids'];
                $server = "localhost";
                $username = "root";
                $password = "";
                $con = mysqli_connect($server, $username, $password);
                $row = 0;
                $sql = "SELECT O.Order_id, B.Username Placed_by, T.Username Placed_to, P.Product_name, O.Quantity, O.Price, L.Company_name, O.Status from scm.orders O inner join scm.user B on O.Placed_by = B.User_id inner join scm.user T on O.Placed_to = T.User_id inner join scm.product P on O.Product_id = P.Product_id inner join scm.logistic_company L on O.Log_company_id = L.Company_id Where O.Placed_to = '$id'";
                $result = $con->query($sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["Order_id"] . "</td><td>" . $row["Placed_by"] . "</td><td>" . $row["Placed_to"] . "</td><td>" . $row["Product_name"] . "</td><td>" . $row["Quantity"] . "</td><td>" . $row["Price"] . "</td><td>" . $row["Company_name"] . "</td><td>" . $row["Status"] . "</td></tr>";
                    }
                }
                ?>
            </table>
        </div>
        <button type="button" class="navbtn" onclick="window.location.href='./update_orders.php'">Update</button>
</body>

</html>