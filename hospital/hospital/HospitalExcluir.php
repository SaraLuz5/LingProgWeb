<?php

// 1- identificar o funcionario para excluir
require_once("util/Conexao.php");

$conexao = Conexao::getConexao();

if (isset($_GET['id']));
$id = $_GET['id'];

if ($id > 0) {
    $sql = "DELETE FROM hospital WHERE id = ?";
    $stm = $conexao->prepare($sql);
    $stm->execute([$id]);

    header("location: hospital.php");

} else {
    echo "Parâmetro invalido!<br>";
    echo "<a href='hospital.php'>Voltar</a>";
}
                    