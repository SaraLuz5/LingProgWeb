<?php

echo "Parâmetros recebidos por POST";

echo"<br>";
$num1 = $_POST['num1'];

echo"<br>";
$num2 = $_POST['num2'];
echo "A soma dos núeros é: " . $num1 + $num2;



// ex_get.php?num1=10&num2=2