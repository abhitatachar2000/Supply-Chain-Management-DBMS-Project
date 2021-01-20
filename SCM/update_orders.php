<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/updo.css?version51">
    <title>Document</title>
</head>

<body>
    <center>
        <h1 style="font-size: 45px; color: white;">Update Order Status</h1>
        <hr>
        <div class="containers">
            <form action="update_orders_action.php" method="POST">
                <br>
                <label for="id" style="background-color:white;"><b>Order id: </b></label>
                <input type='text' name='orderid' id='orderid' placeholder='Enter Order Id' required>
                <br><br>
                <label for="status" style="background-color:white;"><b>Status Of the Order: </b></label>
                <select id="status" name="status">
                    <option value="Packed">Packed</option>
                    <option value="Shipped">Shipped</option>
                    <option value="In-transit">In-transit</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Not Accepted">Not Accepted</option>
                </select>
                <br><br><br><br><br><br>
                <button type='submit' class='submit'>Submit</button>
    </center>
    <button class='backbtn' onclick="window.location.href='./view_orders.php'">Back</button>
 </form><br>


</body>

</html>