<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./styles/login.css?version51">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>You can<span> login</span> here</h1>
    <div class="container">
        <form name = "login" action="action_login.php" method="POST">
            <input type="text" name="userid" id="userid" placeholder="userid" required>
            <input type="password" name="password" id="password" placeholder="password" required>
            <br><br>
            <label for="class" style="background-color: white;">Choose a Class:</label>
            <select id="class" name="class" >
                <option value="1">Supplier</option>
                <option value="2">Production</option>
                <option value="3">Wholeseller</option>
                <option value="4">Retailer</option>
                <option value="5">Customer</option>
            </select>
            <br><br><br><br><br><br><br>
            <button type = 'submit' class='submit'>Submit</button>
            <br><br><br>
            <a href="./index.php">New user, sign-up here</a>
        </form>
    </div>
</body>
</html>