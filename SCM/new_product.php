<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/admin_styles.css" <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>New product</title>
</head>

<body>
    <h1 style="text-align: center; font-size:45px; color:white;">Add New Product</h1>
    <hr>
    <div class="containers">
        <form action="new_product_action.php" method="post">
            <label for="productid">Product id : </label>
            <input type="text" name="productid" id="productid" placeholder="Enter product id" required value="">
            <label for="productname">Prod Name :</label>
            <input type="text" name="productname" id="productname" placeholder="Enter Product name" required value="">
            <label for="producttype">Prod Type :</label>
            <input type="text" name="producttype" id="producttype" placeholder="Enter Product type" required value="">
            <label for="price">Prod Price:</label>
            <input type="text" name="price" id="price" placeholder="Enter Price" required value="">
            <br><br><br>
            <button type="submit" class="submit">Submit</button>
            <button type="button" class="backbtn" onclick="window.history.back()">Back</button>
        </form>
    </div>

    </form>
    </div>
</body>

</html>