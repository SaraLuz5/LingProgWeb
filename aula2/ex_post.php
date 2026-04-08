<?php

echo "Parâmetros recebidos por POST";

echo"<br>";
echo $_POST['nome'];

echo"<br>";
$idade = $_POST['idade'];
echo "Idade da pessoa: " . $idade;



// ex_get.php?nome=Daniel&idade=28