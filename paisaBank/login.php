<?php

	require_once("init.php");

    session_start();

	$username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $error = "username or password is Invalid!";

    $sql = "select * from users where username = '$username' and password = '$password'";

    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) > 0 && $username == 'admin'){
        $_SESSION['username'] = $username;
        header("location: admin/index.php");
    } 
    else{
        $rows = mysqli_num_rows($result);

        if($rows==1){
            $_SESSION['username'] = $username;
            header("location: main/index.php");
        } else {
            header("location: index.php");
        }
    }
?>