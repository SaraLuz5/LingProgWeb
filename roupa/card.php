<?php
require_once("modelo/Roupa.php");

$roupa = new Roupa();
$roupa->setTipo($_POST['tipo'])
    ->setTamanho($_POST['tamanho'])
    ->setMarca($_POST['marca'])
    ->setValor($_POST['valor'])
    ->setComposicao($_POST['composicao'])
    ->setImagem($_POST['linkImagem']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .geral {
            border-radius: 10px;
            width: 600px;
            height: 600px;
            margin-top: auto;
            background-color: #020612e2;
        }


        span {
            justify-content: center;
            display: flex;
        }

        h1 {
            justify-content: center;
            display: flex;
            color: #ffffff;
        }

        .imagem {
            width: auto;
            height: auto;
            justify-content: center;

        }

        .descricao {
            justify-content: center;
            display: flex;
            color: #ffffff;
        }

        .link{
            justify-content: center;
            display: flex;
    
        }
    </style>
</head>

<body>

    <h1>Dados da Roupa</h1>

    <div class="geral">
        <h1>Roupa:</h1>
        <span class="descricao">Peça: <?php echo $roupa->getTipo() ?></span><br>
        <span class="descricao"> Valor: <?php echo $roupa->getValor() ?></span><br>
        <span class="descricao">Tamanho: <?php echo $roupa->getTamanho() ?></span><br>
        <span class="descricao">Marca: <?php echo $roupa->getMarca() ?></span><br>
        <span class="descricao">Composição: <?php echo $roupa->getComposicao() ?></span><br>
        <span class="imagem"><?php $roupa->getImagem() ?></span><br>
        <img style='width:170px; height: auto; margin-left: 230px;' src="<?php echo $roupa->getImagem() ?>" /><br>

        <div class="link">
            
          <a href="http://localhost/sara/LingProgWeb/aula5/formulario.php">voltar</a>

        </div>
    </div>

</body>

</html>
