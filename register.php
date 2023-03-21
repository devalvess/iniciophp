<?php
  
  $mysqli = new mysqli("localhost", "root", "root", "padaria");

  $mysqli->query("insert into clientes
  (`nome`,`telefone`,`ddd`)
  values ('".$_POST['nome']."','".$_POST['telefone']."','".$_POST['ddd']."')");

?>
OK