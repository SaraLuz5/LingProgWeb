<?php

if(isset($_GET['num1']) && isset($_GET['num2']) !='') {
         $num1 = $_GET['num1'];
         $num2 = $_GET['num2'];




echo "<br>";
$num1 = $_GET['num1'];

echo "<br>";
$num2 = $_GET['num2'];

$soma = $num1 + $num2;
$sub = $num1 - $num2;
$div = $num1 / $num2;
$mult = $num1 * $num2;
$resto = $num1 % $num2;

echo "A soma dos valores é: " . $soma  . "<br>" . " A subtração é: " . $sub . "<br>" ." A divisão é: " . $div ."<br>" ." A multiplicação é: " . $mult . "<br>"." O resto é: " . $resto;

}else echo"Informe os parâmetros [num1] e [num2]";




// ex_get.php?num1=10&num2=2