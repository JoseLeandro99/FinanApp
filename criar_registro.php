<?php
    session_start();

    require("utils/db_connection.php");

    $title =  $_POST['register-title'];
    $description = $_POST['register-description'];
    $type =  $_POST['register-type'];
    $value =  $_POST['register-value'];
    $owner =  $_SESSION['user_id'];
    
    $sql = "INSERT INTO entradas (titulo, descricao, tipo, valor, user_id) VALUES ('$title', '$description', '$type', $value, '$owner')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Entrada adicionada com sucesso!'); window.location.href = 'dashboard.php';</script>";
    }
    else {
        //echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        echo "<script>alert('Falha ao adicionar registro'); window.location.href = 'dashboard.php';</script>";
    }
?>