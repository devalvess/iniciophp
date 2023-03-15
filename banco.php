<?php
$servername = "localhost";
$username = "127.0.0.1:3306";
$password = "root";
$dbname = "padaria";

// Cria uma conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
echo "Conexão bem sucedida";
?>
