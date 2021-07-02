<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-12 order-lg-1 order-2 row justify-content-center align-items-center">

                <form action="./signup.php" method="POST">

                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label for="" class="form-label">User</label>
                    <div class="col-12 mb-5">
                        <input class="inputs" type="text" name="name" value="<?php if (isset($_GET['name']))
                                                                                    echo ($_GET['name']); ?>">
                    </div>
                    <label for="" class="form-label">Phone</label>
                    <div class="col-12 mb-5">
                        <input class="inputs" type="tel" name="phone">
                    </div>
                    <label for="" class="form-label">Email</label>
                    <div class="col-12 mb-5">
                        <input class="inputs" type="email" name="email">
                    </div>
                    <label for="" class="form-label">Password</label>
                    <div class="col-12 mb-5">
                        <input class="inputs" type="password" name="password">
                    </div>
                    <label for="" class="form-label">Confirm Password</label>
                    <div class="col-12 mb-5">
                        <input class="inputs" type="password" name="confirm_password">
                    </div>
                    <button type="submit" class="btn btn1">good to go </button>
                    <p>
                        You have an account?<a href="./index_login.php" class="color_signup">login</a> ready
                    </p>
                </form>




            </div>
            <div class="col-lg-7 col-12 order-lg-2 order-1 backImage"></div>

        </div>




    </div>

</body>

</html>