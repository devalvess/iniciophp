<?php
  
  include 'conexao.php';
  include 'funcoes.php';

  if(verificaNome($_POST['nome']) == true) {
      die('Preencha o campo Nome');
  }


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
    <?php echo $button;?>
  </a>
</body>
</html>