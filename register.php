<?php
  
  $mysqli = new mysqli("localhost", "root", "root", "loja");

  $mysqli->query("insert into clientes
  (`nome`,`sobrenome`)
  values ('".$_POST['nome']."','".$_POST['sobrenome']."')");

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
  <a href="/banco.php">
    <button>Voltar Banco</button>
  </a>
</body>
</html>