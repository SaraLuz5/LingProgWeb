<?php

echo "Parâmetros recebidos por GET";

echo"<br>";
$num1 = $_GET['num1'];

echo"<br>";
$num2 = $_GET['num2'];

echo"<br>";
$num3 = $_GET['num3'];

echo "A média aritmética dos números é: " . (($num1 + $num2 + $num3 )/ 3);



// ex_get.php?num1=10&num2=2&num3=3
