<?php

    function verificaNome($nome) {
        
        if($nome == '') {
         return true;
        } else {
            return false;
        }
    }

    function verificaSessao() {
        if($_SESSION['usuario_logado'] == '') {
            header('location:login.php');
        }
    }




?>