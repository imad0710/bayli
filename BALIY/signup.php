<?php

if (isset($_POST['create'])) {
	include "./db_conn.php";
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);
    $cnpass = Validate($_POST['confirm_password']);

	$user_data = 'name=' . $name .'phone=' . $phone . '&email=' . $email . 'password=' . $pass . 'confirm_password=' . $cnpass;

	if (empty($name)) {
		header("Location: index_signup.php?error=Name is required&$user_data");
	} else if (empty($email)) {
		header("Location: index_signup.php?error=Email is required&$user_data");
	} else {

		$sql = "INSERT INTO users(user_name, email,phone, password,cnpassword) 
               VALUES('$name', '$email','$phone' , '$pass','$cnpass')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location: ../read.php?success=successfully created");
		} else {
			header("Location: ../index.php?error=unknown error occurred&$user_data");
		}
	}
}
