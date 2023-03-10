<?php


$cidade = "São Paulo";
$nome = "Edilson";
$idade = 17;

 /*if(date('H') > 12 && $cidade == "Sales Oliveira" && $nome = "Edilson") {
    echo 'Em Sales Oliveira é complicado depois do 12:00 meu jovem. ';
 } else {
    echo 'Antes das 12:00 em Sales Oliveira é tranquilo';
 }*/

 switch ($idade) {
    case $idade >=18 :
        if(date('H') < 23 ) {
            echo "Mesmo sendo de maior após as 00:00 cessa as vendas de bebidas  ";
        }
        break;

    case $idade <= 17:
        if(date('H') > 23) {
            echo "Após 23:00 é proibido menores de idade nesse local";
        }
        break; 
    default:
        echo "Por favor informar a idade";
        break;       
 }


?>