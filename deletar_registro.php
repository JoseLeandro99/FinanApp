<?php
    session_start();

    require("utils/db_connection.php");

    $item_id =  $_POST['register-id'];

    $sql = "DELETE FROM entradas WHERE id='$item_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Item removido'); window.location.href = 'dashboard.php';</script>";
    }
    else {
        //echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        echo "<script>alert('Falha ao remover registro'); window.location.href = 'dashboard.php';</script>";
    }
?>