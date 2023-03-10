

<?php
   /*
   $x = "edilSon AlVes dOS sANTOS"; 
   $x = ucwords(strtolower($x));
   echo $x;
   */

  /*
   $x = "EDILSON ALVES DOS SANTOS";
   $x = strtolower($x);
   echo ucwords($x);
   */

   /*
   $x = "Edilson Alves dos Santos";
   echo str_replace('Santos','Silva',$x);
   */

   /*
   $x = "Edilson Santos";
   echo substr($x,7);
   */
   $x = 11111111111;
   $y = strlen($x);
   echo $y;
   echo "<br/>";
   echo "<br/>";
   
   $a = 11111111111;
   $b = strlen($a);
   echo $b;
   echo "<br/>";

   /*if ( $b === $y) {
      echo "CPF CORRETO";
      } else {
      echo "PREENCHA O CAMPO CPF COM OS 11 DIGITOS";
      };*/

    
 
   function val($b,$y)
   {
         if ( $b == $y) {
         echo "CPF CORRETO";
         } else {
         echo "PREENCHA O CAMPO CPF COM OS 11 DIGITOS";
         };
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
   <h1>Validação CPF</h1>

<form action="praticastring.php" method="get">

Digite algo: <input type="text" name="formulario">
<input type="submit">
</form>
<?php

echo "voce digitou: ",  $_GET["formulario"],"<br>";
?>





 

</form>
   
</body>
</html>