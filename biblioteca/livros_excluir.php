<?php

// 1- identificar o livro para excluir
require_once("util/Conexao.php");

$conexao = Conexao::getConexao();

if (isset($_GET['id']));
$id = $_GET['id'];

if ($id > 0) {
    $sql = "DELETE FROM livros WHERE id = ?";
    $stm = $conexao->prepare($sql);
    $stm->execute([$id]);

    header("location: livros.php");

} else {
    echo "Parâmetro invalido!<br>";
    echo "<a href='livros.php'>Voltar</a>";
}

