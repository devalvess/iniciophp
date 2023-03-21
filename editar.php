
<?php

    $mysqli = new mysqli("localhost", "root", "root", "padaria");

    $result = $mysqli->query("select * from clientes where id = ".$_GET['cliente_id']);
    $clientes = $result->fetch_assoc();

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
<form action="/salvaAlteracao.php" method="post">
   
   <input type="text" value="<?php echo $clientes['nome']; ?>" name="nome" id="nome" placeholder="Insira seu Nome"> <br>
   <input type="text" value="<?php echo $clientes['telefone']; ?>" name="telefone" id="telefone" placeholder="Insira seu telefone"> <br>
   <input type="text" value="<?php echo $clientes['ddd']; ?>" name="ddd" id="ddd" placeholder="Insira seu ddd"> <br>

   
   
   <input type="hidden" name="cliente_id" value="<?php echo $clientes['id']; ?>">
   <input type="submit" value="alterar">
</body>
</html>
