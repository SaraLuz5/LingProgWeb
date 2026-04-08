<?php

require_once("modelo/Veiculo.php");

$veiculo = new Veiculo;
$veiculo->setModelo($_POST["modelo"]);
$veiculo->setMarca($_POST["marca"]);
$veiculo->setCombust($_POST["combustivel"]);

echo "<h1>Dados informados para o veículo" . "<br>";
echo "Modelo: " . $veiculo->getModelo() . "<br>";
echo "Marca: " . $veiculo->getMarca() . "<br>";
echo "Combustível: " . $veiculo->getCombust() . "<br>";

echo "<br><br>";
echo "<a href='veiculo_form.php'>Cadastrar outro veículo</a>";
