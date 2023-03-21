
<?php

    $mysqli = new mysqli("localhost", "root", "root", "padaria");


   // Buscar dados

   $result = $mysqli->query("select * from clientes");

   //print_r($result);

   // mostrar dados
   while($clientes = $result->fetch_assoc()) {
    $listaClientes .=  '<tr>
                    <td>'.$clientes['id'].'</td>
                    <td>'.$clientes['nome'].'</td>
                    <td>'.$clientes['telefone'].'</td>
                    <td>'.$clientes['ddd'].'</td>
                    <td> <a href="/editar.php?cliente_id='.$clientes['id'].'">Editar</a> </td>
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
            <td>Telefone</td>
            <td>DDD</td>
            <td></td>
        </tr>
        <?php echo $listaClientes;?>
    </table>
</body>
</html>