<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css?versin51">
    <title>Sign-up</title>
</head>

<body>

    <div class="container">
        <h1>Sign-up?</h1>
        <form action="action_index.php" method="POST">
            <input type='text' name='userid' id='userid' placeholder='userid' required>
            <input type='text' name='username' id='username' placeholder='username' required>
            <input type='password' name='password' id='password' placeholder='password'>
            <input type='text' name='phone' id='phone' placeholder='phone'>
            <input type='text' name='email' id='email' placeholder='email'>
            <input type='text' name='location' id='location' placeholder='location'>

            <br><br>
            <label for="class" style="background-color: white;">Choose a Class:</label>
            <select id="class" name="class">
                <option value="1">Supplier</option>
                <option value="2">Production</option>
                <option value="3">Wholeseller</option>
                <option value="4">Retailer</option>
                <option value="5">Customer</option>
            </select>
            <br><br><br><br><br><br>
            <button type='submit' class='submit' onclick="myFunction()">Submit</button>
        </form><br>
        Existing user? <a href="login.php">Login here</a><br><br>
        Admin user? <a href="admin_login.php">Login here</a>
    </div>

    <script>
        function myFunction() {
            document.getElementById("myForm").reset();
        }
    </script>

</body>

</html>