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
    $compid = $_POST['compid'];
    $compname = $_POST['compname'];
    $complocation = $_POST['complocation'];
    $compmot = $_POST['compmot'];
    echo $compid, $compname, $complocation, $compmot;
    $sql = "INSERT INTO `scm`.`logistic_company`(`Company_id`, `Company_name`, `Location`, `Mode_of_transportation`) VALUES ('$compid','$compname','$complocation','$compmot')";
    $result = $con->query($sql);
    if ($result == true) {
    ?>
        <script>
            alert("New Company Inserted Successfully");
            window.location.href = "new_logistics.php";
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("New Company   Could not be inserted successfully");
            window.location.href = "new_logistics.php";
        </script>

<?php
    }
}

?>