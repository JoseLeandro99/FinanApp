<?php
    require("utils/db_connection.php");

    $name =  $_POST['register-name'];
    $email = $_POST['register-email'];
    $password =  $_POST['register-password'];
    
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuário cadastrado com sucesso!'); window.location.href = 'cadastro.php';</script>";
        header("Location: index.php");
    }
    else if (mysqli_errno($conn) == 1062) {
        echo "<script>alert('O email $email já está cadastrado!'); window.location.href = 'cadastro.php';</script>";
    }
    else {
        //echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        header("Location: erro_cadastro.php");
    }
?>