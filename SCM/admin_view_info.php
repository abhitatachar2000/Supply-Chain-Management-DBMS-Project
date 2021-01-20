<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/remove_user.css">
    <title>Admin_View_info</title>
</head>

<body>
    <h1 style="text-align: center; font-size:45px; color:white;">View User Info</h1>
    <hr>
    <div class="containers">
        <form action="#" method="post">
            <label for="user_id">User Id : </label>
            <input type="text" name="userid" id="userid" placeholder="Enter User id" required value=""><br><br>
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
    <table id='info_table' class="rwd-table">
        <tr>
            <th>User_id</th>
            <th>User Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Location</th>
            <th>Class</th>
            <th>Password</th>
        </tr>
        <?php
        error_reporting(0);
        $server = "localhost";
        $username = "root";
        $password = "";
        $con = mysqli_connect($server, $username, $password);
        $row = 0;
        if (!$con) {
            echo "Connection failed";
        } else {
            $id = $_POST['userid'];
            $sql = "SELECT scm.user.User_id, scm.user.Username, scm.user.Phone, scm.user.Email, scm.user.Location, scm.class.Class_name, scm.login.Password FROM scm.user INNER JOIN scm.class on scm.user.Class_id = scm.class.Class_id INNER JOIN scm.login on scm.user.User_id = scm.login.User_id where scm.user.User_id='$id'";
            $result = $con->query($sql);
            $count = mysqli_num_rows($result);
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["User_id"] . "</td><td>" . $row["Username"] . "</td><td>" . $row["Phone"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Location"] . "</td><td>" . $row["Class_name"] . "</td><td>" . $row["Password"] . "</td></tr>";
                }
            }
        }

        ?>
    </table>
    <button type="button" class="backbtn" onclick="window.history.back()">Back</button>
</body>

</html>