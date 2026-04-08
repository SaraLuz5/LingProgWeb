<?php
$login = "";
if (isset($_POST["login"]))
    $login = $_POST["login"];

$senha = "";
if (isset($_POST["senha"]))
    $senha = $_POST["senha"];

$estaLogado = false;
if ($login == "ifpr" && $senha == "tds")
    $estaLogado = true;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <?php if ($estaLogado) : ?>
      <h3>Bem Vindo ao TDS!</h3>
       <?php  else : ?>

    <h1>Formulário</h1>

    <form action="" method="POST">

        <label for="">Login: </label>
        <input type="text" placeholder="Informe teu login"
            name="login">


        <br><br>

        <label for="">Senha: </label>
        <input type="password" placeholder="Informe tua senha"
            name="senha">

        <br><br>

        <button>Enviar</button>

    </form> 
        <?php endif; ?>
</body>

</html>