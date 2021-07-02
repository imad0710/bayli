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

				<form action="./login.php" method="POST">
					
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
					<label for="" class="form-label">User</label>
					<div class="col-12 mb-5">
						<input class="inputs" type="text" name="user_name">
					</div>
					<label for="" class="form-label">Password</label>
					<div class="col-12 mb-5">
						<input class="inputs" type="text" name="password">
					</div>
					<button type="submit" class="btn btn1">Let in</button>
					<p>
				Don't have an account?<a href="./index_signuup.php" class="color_signup">Signup</a>  Now
				</p>
				</form>
				



			</div>
			<div class="col-lg-7 col-12 order-lg-2 order-1 backImage">



			</div>

		</div>




	</div>
</body>

</html>