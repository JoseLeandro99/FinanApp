<?php
    session_start();
    require("utils/db_connection.php");

    $email = $_POST['login-email'];
    $password =  $_POST['login-password'];

    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nome'];
        $_SESSION['user_email'] = $user['email'];

        header("Location: dashboard.php");
    } else {
        header("Location: erro_login.php");
    }
?>