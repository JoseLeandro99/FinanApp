<?php
    require("utils/db_connection.php");

    $user_id =  $_POST['profile-id'];
    $name =  $_POST['profile-name'];
    $email = $_POST['profile-email'];
    
    $sql = "UPDATE usuarios SET nome='$name', email='$email' WHERE id=$user_id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;

        session_write_close();

        echo "<script>alert('Perfil atualizado com sucesso! É necessário realizar o login novamente.'); window.location.href = 'logout.php';</script>";
        exit();
    }
    else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        //echo "<script>alert('Erro ao atualizar o perfil!'); window.location.href = 'perfil.php';</script>";
    }
?>