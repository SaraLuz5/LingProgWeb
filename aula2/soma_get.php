<?php

echo "Parâmetros recebidos por GET";

echo"<br>";
$num1 = $_GET['num1'];

echo"<br>";
$num2 = $_GET['num2'];
echo "A soma dos núeros é: " . $num1 + $num2;



// ex_get.php?num1=10&num2=2