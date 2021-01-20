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
    $userid = $_POST['userid'];
    $sql = "DELETE FROM scm.user WHERE scm.user.User_id ='$userid'";
    $result = $con->query($sql);
    if ($result == true) {
?>
        <script>
            alert("User Deleted");
            window.location.href = "remove_user.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("User Could not be Deleted");
            window.location.href = "remove_user.php";
        </script>

<?php
    }
}

?>