<?php
session_start();
include"db_conn.php";

if(isset($_POST['user_name']) && isset(['password'])) {

     function validate($data)
     {
         $data =  trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     }
     $user_name = validate($_POST['user_name']);
     $pass = validate($_POST['password']);

     if (empty($user_name)) {
         header("Location: index.php?error=User Name is required");
         exit();
     }elseif (empty($pass)) {
        header("Location: index.php?error=Password is required");
		exit();
     } else {
     $sql = "SELECT * FROM users WHERE user_name='$user_name' AND password='$pass'";
     $result = mysqli_query($conn,$sql);

     if (mysqli_num_rows($result) === 1) {
         $row = mysqli_fetch_assoc($result);
         if ($row['user_name'] === $user_name && $row['password'] === $pass) {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['id'] = $row['id'];
            header("Location: index_login.php");
            exit();
         }else {
            header("Location: index_login.php?error=Incorect User users_name or password");
            exit();
        }


     } else {
        header("Location: index_login.php?error=Incorect Users user_name or password");
        exit();
    }





     }



}else {
	header("Location: index_login.php");
	exit();
}