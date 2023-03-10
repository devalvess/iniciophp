<?php  

  $x = "Manipulação de String com PHP";
  echo $x;
  echo "<br/>";
  echo "<br/>";

 // ---------------------------
  $x = "bom dia - Utilizando strtoupper";
  echo strtoupper($x); //texto em maisuculo
  echo "<br/>";
  echo "<br/>";
// ---------------------------
  $x = "bom dia - Utilizando ucwords";
  echo ucwords($x); //Primeira letra da palavra em Maiusculo
  echo "<br/>";
  echo "<br/>";
// ---------------------------
  $x = "bom dia - Utilizando ucfirst";
  echo ucfirst($x); // Primeira Letra da frase Maiuscula
  echo "<br/>";
  echo "<br/>";
// ---------------------------
  $x = "BOM DIA - Utilizando strtolower";
  echo strtolower($x); //Transforma em minuscula
  echo "<br/>";
  echo "<br/>";
//--------------------------
  echo "<hr/>";

  $x = "BOM DIA";
  $x = strtolower($x); // passa string para minusculo
  echo ucwords($x); // depois aplica o ucwords

  echo "<hr/>";
// ---------------------------
  $x = "Funções dentro de Funções";
  echo $x;
  echo "<br/>";
  echo "<br/>";

  $x = "CARRO BOM";
  $x = ucwords(strtolower($x)); // é lido primeiro aquilo que está dentro de parentese, depois xecuta fora
  echo $x;
  echo "<br/>";
  echo "<br/>";
  echo "<hr/>";
// ---------------------------
 $x =  "Alterar partes do Texto";
 echo $x;
 echo "<br/>";
 echo "<br/>";

 $x = "BOM DIA";

 echo str_replace('DIA','NOITE',$x); // substituir uma parte do texto
 echo "<br/>";
 echo substr($x,3); // retornar texto apartir de um numero.
 echo "<br/>";
 echo strlen($x); // saber comprimento de um texto.







?>