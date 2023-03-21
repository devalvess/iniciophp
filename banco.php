
<?php

    $mysqli = new mysqli("localhost", "root", "root", "loja");


   // Buscar dados

   $result = $mysqli->query("select * from clientes");

   //print_r($result);

   // mostrar dados
   while($clientes = $result->fetch_assoc()) {
    $listaClientes .=  '<tr>
                    <td>'.$clientes['id'].'</td>
                    <td>'.$clientes['nome'].'</td>
                    <td>'.$clientes['sobrenome'].'</td>
                    <td> <a href="/editar.php?cliente_id='.$clientes['id'].'">Editar</a> </td>
                    <td> <a href="/excluir.php?cliente_id='.$clientes['id'].'">Excluir</a> </td>
                </tr>';
   }

    

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
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td></td>
            <td></td>
        </tr>
        <?php echo $listaClientes;?>
    </table>

    <a href="/receivinghtml.php">
        <button>Cadastrar</button>
    </a>
</body>
</html>