<?php
  

  $DiasDaSemana[0] = 'Edilson';
  $DiasDaSemana[1] = 'Edson';
  $DiasDaSemana[2] = 'Junior';
  $DiasDaSemana[3] = 'Ana';
  $DiasDaSemana[4] = 'Raiane';
  $DiasDaSemana[5] = 'Luiza';
  $DiasDaSemana[6] = 'Quiteria';

  foreach ($DiasDaSemana as $key => $value) {
    $ListaDias .= '<td>' .$value. '</td>';
  }

  /*for ($i=0; $i <= 6 ; $i++) { 
    $ListaDias .= '<td>' .$DiasDaSemana[$i]. '</td>';
  }*/

  for ($i=0; $i <= 24; $i++) {
    $horarios .= '<tr>
    <td>'.$i.'</td> 
    <td>'.$i.'</td> 
    <td>'.$i.'</td> 
    <td>'.$i.'</td> 
    <td>'.$i.'</td> 
    <td>'.$i.'</td> 
    <td>'.$i.'</td> 
</tr>';
  }

  $a = 0;
  while ($a < 5) {
    $a++;
    echo $a;
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
            <?php  echo $ListaDias;?>
        </tr>

        <?php echo $horarios; ?>
   
    </table>
    
</body>
</html>