<?php

echo "Parâmetros recebidos por GET";

echo"<br>";
echo $_GET['nome'];

echo"<br>";
$idade = $_GET['idade'];
echo "Idade da pessoa: " . $idade;



// ex_get.php?nome=Daniel&idade=28