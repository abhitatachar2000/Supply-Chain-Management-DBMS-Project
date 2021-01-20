<?php
session_start();
$server = "localhost";
$name = "root";
$password = "";
$con = mysqli_connect($server, $name, $password);
if (!$con) {
    echo "connection failed";
} else {
    $adminid = $_SESSION['Admin_id'];
    $sql = "SELECT `admin`.`Admin_name` from `scm`.`admin` where Admin_id='$adminid';";
    $result = $con->query($sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $row = $result->fetch_assoc();
        $user_name = $row['Admin_name'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/user.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <div class="container">
        <h1>Hi <?php echo $user_name; ?></h1>
    </div>
    <div class="container2">
        <button type="button" class="btn" onclick="window.location.href='./new_class.php'">New Class</button><br>
        <button type="button" class="btn" onclick="window.location.href='./new_product.php'">New Product</button><br>
        <button type="button" class="btn" onclick="window.location.href='./new_logistics.php'">New Logistic</button><br>
        <button type="button" class="btn" onclick="window.location.href='./admin_view_info.php'">View User Info</button><br>
        <button type="button" class="btn" onclick="window.location.href='./remove_user.php'">Remove user</button><br>
        <button type="button" class="btn" onclick="window.location.href='./orders_log.php'">View Order Log</button><br>
        <button type="button" class="btn" onclick="window.location.href='./activitylog.php'">View Usage Log</button><br>
        <button type="button" class="btn" onclick="window.location.href='./logout.php'">Logout</button><br>
    </div>
</body>

</html>