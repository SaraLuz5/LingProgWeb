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
         
        div{

            background-color:aliceblue;
            border-color: grey;
        }
        
        span{
            justify-content: center;
            display: flex; 
        }
        

    </style>
</head>
<body>

     <h1>Dados da Roupa</h1>

    <div style='border: 1px; width: 550px; height: 550px ;margin-top: 50px;'>
       <span style="font-weight: bold;">Roupa</span>
       <span><?php echo $roupa->getTipo() ?></span><br>
       <span><?php echo $roupa->getValor() ?></span><br>
       <span><?php echo $roupa->getTamanho() ?></span><br>
       <span><?php echo $roupa->getMarca() ?></span><br>
       <span><?php echo $roupa->getComposicao() ?></span><br>
       <span><?php echo $roupa->getImagem() ?></span><br>
        <img style='width: 255px; height: auto; margin-left: 145px;' src='http://linkImagem.com'/><br>
    </div>

</body>
</html>