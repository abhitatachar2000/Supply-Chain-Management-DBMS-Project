<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/invent.css">
    <title>Update Inventory</title>
</head>
<body>
    <h1>Update Inventory</h1><hr><br>
        <div class="container">
        <form action="action_catalogue.php" method="POST">
            <input type='text' name='Product_id' id='Product_id' placeholder='Product_id' required>
            <input type='text' name='Quantity' id='Quantity' placeholder='Quantity' required>
            <br><br><br>
            <button type = 'submit' class='submit'>Submit</button>
            
        </form><br>


        
    
</body>

</html>