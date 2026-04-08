<?php
require_once("modelo/Produto.php");



$produto = new Produto();
$produto->setDescricao($_POST['descricao'])
        ->setMarca($_POST['marca'])
        ->setTipo($_POST['tipo'])
        ->setValor($_POST['valor'])
        ->setDescDetalhada($_POST['descDetalhada'])
        ->setLinlImagem($_POST['linkImagem']);

//print_r($produto);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados do Produto</h1>

    <div>
        <span style="font-weight: bold;">Descrição</span>
        <span><?php echo $produto->getDescricao() ?></span>
    </div>


    <div>
        <span style="font-weight: bold;">Marca</span>
        <span><?php echo $produto->getMarca()?></span>
    </div>

    <div>
        <span style="font-weight: bold;">Valor</span>
        <span><?php echo $produto->getValor()?></span>
    </div>

    <div>
        <span style="font-weight: bold;">Tipo</span>
        <span><?php echo $produto->getTipo()?></span>
    </div>

     <div>
        <span style="font-weight: bold;">Detalhe do Produto</span>
        <span><?php echo $produto->getDescDetalhada()?></span>
    </div>

     <div>
        <span style="font-weight: bold;">Imagem</span>
        <span><?php echo $produto->getLinlImagem()?></span>
    </div>


</body>
</html>