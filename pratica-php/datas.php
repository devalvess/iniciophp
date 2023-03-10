<?php 


 
echo date('d/m/y h:i:s');
echo "</br>";

$dia = 86400;

$momento =time() - ($dia*2);

echo date ('d/m/y', $momento);
echo "</br>";

$passado = mktime(23,40,0,3,1,2023);
$presente = mktime(23,40,0,3,9,2023);

$resultado = $presente - $passado;

echo $resultado;
echo "</br>";

$x = $resultado / 86400;

echo $x;






?>