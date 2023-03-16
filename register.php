<?php
  
  $mysqli = new mysqli("localhost", "root", "root", "padaria");

  $mysqli->query("insert into clientes
  (`nome`,`telefone`,`ddd`,`genero`,`NASCIMENTO`)
  values ('".$_POST['nome']."','".$_POST['telefone']."','".$_POST['ddd']."','".$_POST['genero']."','".$_POST['nascimento']."')");

?>
OK