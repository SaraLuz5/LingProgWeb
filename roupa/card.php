<?php
require_once("modelo/Roupa.php");


//objeto
$roupa = new Roupa();
$roupa->setTipo($_POST['tipo'])
    ->setTamanho($_POST['tamanho'])
    ->setMarca($_POST['marca'])
    ->setValor($_POST['valor'])
    ->setComposicao($_POST['composicao'])
    ->setImagem($_POST['linkImagem'])
    ->setCor($_POST['cor']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <title>Document</title>

    <style>
        .geral {
            border-radius: 10px;
            width: 600px;
            height: 600px;
            margin-top: auto;
            background-color: <?php echo $roupa->getCor()?>;
            box-shadow: 10px 10px 10px rgba(0, 0, 0,0.3);
        }


        span {
            justify-content: center;
            display: flex;
        }

        h1 {
            justify-content: center;
            display: flex;
            color: #613749;
            font-family: "Imperial Script", cursive;
            font-size: 80px;
            
        }

        h2{
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
            color: #ffffff;
    
        }
    </style>
</head>

<body>

    <h1>Dados da Roupa</h1>

    <div class="geral">

        <h2>Roupa:</h2>
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
