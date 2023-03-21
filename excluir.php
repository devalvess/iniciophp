<?php 


$mysqli = new mysqli("localhost", "root", "root", "loja");

$mysqli->query("delete from clientes  where id = ".$_GET['cliente_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Cliente excluido com sucesso</p>
    <a href="/banco.php">
        <button> Voltar</button>
    </a>
</body>
</html>