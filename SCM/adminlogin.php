<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 column1">
                <img src="./styles/imgs/lgin.png" alt="Login img not found" srcset="">
            </div>
            <div class="col-sm-8 column2 padder">
                <br>
                <h1>Heyyya!!!</h1>
                <p>Welcome back! Log in to your account to view activities:</p>
                <form class="loginForm" action="#" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admin id</label>
                        <input type="text" class="form-control" name="adminid" id="adminid" placeholder="Enter Admin id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 button-wrapper">
                            <button type="submit">Log in</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>


</html>