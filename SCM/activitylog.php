<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./styles/admin_styles.css">
    <link rel="stylesheet" type="text/css" href="./datatables.min.css" />
    <script type="text/javascript" src="./datatables.min.js"></script>
    <title>Activity log</title>
</head>

<body>
    <h1 style="text-align : center; font-size:45px;">View Activity Log </h1>
    <hr>
    <button type="button" class="backbtn" onclick="window.history.back()">Back</button>
    <table name="info_table" id='info_table' class="rwd-table">
        <tr>
            <th>Sl.no</th>
            <th>User_id</th>
            <th>Associated User_id</th>
            <th>Comments</th>
            <th>Timestamp</th>
        </tr>
        <?php
        //error_reporting(0);
        $server = "localhost";
        $username = "root";
        $password = "";
        $con = mysqli_connect($server, $username, $password);
        $row = 0;
        $sql = "SELECT * FROM `scm`.`usage_log` WHERE 1";
        $result = $con->query($sql);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Sl.no"] . "</td><td>" . $row["User_id"] . "</td><td>" . $row["Associated_id"] . "</td><td>" . $row["Comments"] . "</td><td>" . $row["Timestamp"] . "</td></tr>";
            }
        }
        ?>
    </table>
    <br><br>
</body>

</html>