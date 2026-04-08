<?php

echo "Parâmetros recebidos por POST";

echo"<br>";
$num1 = $_POST['num1'];

echo"<br>";
$num2 = $_POST['num2'];

echo"<br>";
$num3 = $_POST['num3'];

echo "A média aritmética dos números é: " . (($num1 + $num2 + $num3 )/ 3);



// ex_get.php?num1=10&num2=2&num3=3
