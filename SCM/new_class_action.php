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
    $class_id = $_POST['classid'];
    $classname = $_POST['classname'];
    $sql = "INSERT INTO `scm`.`class`(`Class_id`, `Class_name`) VALUES ('$class_id','$classname')";
    $result = $con->query($sql);
    if ($result == true) {
?>
        <script>
            alert("New Class Inserted Successfully");
            window.location.href = "new_class.php";
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("New Class Could not be inserted successfully");
            window.location.href = "new_class.php";
        </script>

<?php
    }
}


?>