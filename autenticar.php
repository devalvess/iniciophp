<?php 
    
   include 'conexao.php'; 

   if(strtolower($_POST['login']) == 'admin' && $_POST['senha'] == '1234') {
    $_SESSION['usuario_logado'] = 'admin';
    header('location:banco.php');
   } else {
    dia('Login e senha invalidos');
   }


?>