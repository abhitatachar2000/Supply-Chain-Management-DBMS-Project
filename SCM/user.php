<?php
    session_start();
    //echo $_SESSION['userids'];
    $server = "localhost";
    $name = "root";
    $password = "";
    $con = mysqli_connect($server, $name, $password);
    if(!$con){
        echo "connection failed";
    }
    else{
        $user_id = $_SESSION['userids'];
        $sql="SELECT user.Username from scm.user where User_id='$user_id';";
        $result = $con->query($sql);
        $count = mysqli_num_rows($result);
        if($count>0){
            $row = $result->fetch_assoc();
            $user_name = $row['Username'];
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./styles/user.css?version51">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier</title>
</head>
<body>
    <div class="container">
        <h1>Hi <?php echo $user_name; ?>!!!</h1>
    </div>
    <div class = "container2">
    <button type="button" class="btn" onclick="window.location.href='./view_info.php'">View Info</button><br>
    <button type="button" class="btn" onclick="window.location.href='./view_orders.php'">View Orders</button><br>
    <button type="button" class="btn" onclick="window.location.href='./item.php'">Search Item</button><br>
    <button type="button" class="btn" onclick="window.location.href='./delete_acc.php'">Delete Account</button><br>
    <button type="button" class="btn" onclick="window.location.href='./update_inventory.php'">Update Inventory</button><br>
    <button type="button" class="btn" onclick="window.location.href='./catalogue.php'">Update Catalogue</button><br>
    <button type="button" class="btn" onclick="window.location.href='./logout.php'">Logout</button><br>
    </div>
</body>
</html>