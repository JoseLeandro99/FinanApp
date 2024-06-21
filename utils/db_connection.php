<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "finanappdb";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Falha ao se conectar com o banco de dados: " . mysqli_connect_error());
    }
?>