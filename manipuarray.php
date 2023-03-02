<?php 

 //array unica dimensão
 
  /*$cidades[] = 'São Paulo';
  $cidades[] = 'Osasco';
  $cidades[] = 'Santos';
  $cidades[] = 'Belo Horizonte';

  var_dump($cidades);*/

  // array multi dimensional
  $cliente['nome'] = 'Edilson'; 
  $cliente['genero'] = 'Masculino';
  $cliente['celular'] = '16991865749';
  $cliente['email'] = 'edilsonsantos@gmail.com';
  $clientes[] = $cliente;

  $cliente['nome'] = 'Edson'; 
  $cliente['genero'] = 'Masculino';
  $cliente['celular'] = '169918896749';
  $cliente['email'] = 'edsonsantos@gmail.com';
  $clientes[] = $cliente;

  $cliente['nome'] = 'Pedro'; 
  $cliente['genero'] = 'Masculino';
  $cliente['celular'] = '16991888749';
  $cliente['email'] = 'pedrosantos@gmail.com';
  $clientes[] = $cliente;

  var_dump($clientes);

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
    <h1>Lista de Clientes</h1>

    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Genero</td>
                <td>Celular</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $clientes[0]['nome'];?> </td>
                <td> <?php echo $clientes[0]['email'];?> </td>
                <td> <?php echo $clientes[0]['celular'];?> </td>
                <td> <?php echo $clientes[0]['genero'];?> </td>
            </tr>
            <tr>
                <td> <?php echo $clientes[1]['nome'];?> </td>
                <td> <?php echo $clientes[1]['email'];?> </td>
                <td> <?php echo $clientes[1]['celular'];?> </td>
                <td> <?php echo $clientes[1]['genero'];?> </td>
            </tr>
            <tr>
                <td> <?php echo $clientes[2]['nome'];?> </td>
                <td> <?php echo $clientes[2]['email'];?> </td>
                <td> <?php echo $clientes[2]['celular'];?> </td>
                <td> <?php echo $clientes[2]['genero'];?> </td>
            </tr>
        </tbody>
    </table>
    
 </body>
 </html>