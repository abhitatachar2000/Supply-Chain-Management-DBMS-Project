<?php
    session_start();
    $id = $_SESSION['userids'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./styles/info.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Info</title>
</head>
<body>
    <br>
    <h1 style="text-align : center; font-size:45px;">View Your Info </h1>
    <hr>
    <br>
  
<br> <br> <br>
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
                        //error_reporting(0);
                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $con = mysqli_connect($server, $username, $password);
                        $row =0 ;
                        $sql = "SELECT scm.user.User_id, scm.user.Username, scm.user.Phone, scm.user.Email, scm.user.Location, scm.class.Class_name, scm.login.Password FROM scm.user INNER JOIN scm.class on scm.user.Class_id = scm.class.Class_id INNER JOIN scm.login on scm.user.User_id = scm.login.User_id where scm.user.User_id='$id'";
                        $result = $con->query($sql);
                        $count = mysqli_num_rows($result);
                        if($count>0){
                            while($row = $result->fetch_assoc()){
                                    echo "<tr><td>".$row["User_id"]."</td><td>".$row["Username"]."</td><td>".$row["Phone"]."</td><td>".$row["Email"]."</td><td>".$row["Location"]."</td><td>".$row["Class_name"]."</td><td>".$row["Password"]."</td></tr>";
                                
                            }
                        }

                    
                ?>
    </table><br><br>
    <div class="ctnr">
    <button class="btn" onclick="window.location.href='./update_info.php'">Update info</button><br>
    <button type="button" class="btn" onclick=" window.history.back();">Go Back.</button>
    </div>
    
                
                
</body>
</html>

