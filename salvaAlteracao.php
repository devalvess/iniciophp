<?php 


include 'conexao.php';

//echo ("update from clientes set nome = '".$_POST['nome']."', sobrenome = '".$_POST['sobrenome']."' where id = ".$_POST['cliente_id']);

$mysqli->query("update clientes set nome = '".$_POST['nome']."', 
sobrenome = '".$_POST['sobrenome']."' where id = ".$_POST['cliente_id']);

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