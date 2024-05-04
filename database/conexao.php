<?php
$servername = "localhost";
$username = "root";
$password = "";

// conexão com o banco de dados
try {
    $conn = new PDO("mysql:host=$servername;dbname=inventario", $username, $password);
    // definir o erro PDO cometido com a exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    $error_message = $e->getMessage();
}