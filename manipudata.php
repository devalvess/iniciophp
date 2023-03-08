<?php 

#1 hora
$hora = 3600;

#1 dia
$dia = 86400;

#$momento = time() + ($dia*3);

$momento = mktime(19,38,0,3,7,2023);

echo date('d/m/Y H:i:s', $momento);



?>