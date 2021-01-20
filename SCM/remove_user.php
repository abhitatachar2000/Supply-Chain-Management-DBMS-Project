<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/remove_user.css">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center; font-size:45px; color:white;">Remove User</h1>
    <hr>
    <div class="containers">
        <form action="action_remove.php" method="post">
            <label for="user_id">User Id : </label>
            <input type="text" name="userid" id="userid" placeholder="Enter User id" required value=""><br><br>
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>

    <button type="button" class="backbtn" onclick="window.history.back()">Back</button>
</body>

</html>