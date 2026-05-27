<?php

//Exibir erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("util/Conexao.php");

$conexao = Conexao::getConexao();
$msgErro = "";

$nome = "";
$CPF = "";
$genero = "";
$setor = "";
$carga = "";

//Receber os dados do formularios
if (isset($_POST['nome'])) {
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $CPF = is_numeric($_POST['CPF']) ? $_POST['CPF'] : null;
    $genero = trim($_POST['genero']) ? trim($_POST['genero']) : null;
    $setor = trim($_POST['setor']) ? trim($_POST['setor']) : null;
    $carga = is_numeric($_POST['carga']) ? $_POST['carga'] : null;

    // 1.1-Validar os dados
    $msgs = array();
    if (! $nome)
        array_push($msgs, "Informe o nome!");

    if (! $CPF)
        array_push($msgs, "Informe o CPF!");
    elseif (strlen($CPF) != 11) { // =11
        array_push($msgs, "O CPF não é válido!");
    }
    if (! $genero)
        array_push($msgs, "Informe o gênero!");

    if (! $setor)
        array_push($msgs, "Informe o setor!");

    if (! $carga)
        array_push($msgs, "Informe a Carga Horária");
    elseif ($carga > 44){
        array_push($msgs, "A carga horária não pode ser maior que 44 horas");
    }
    if (empty($msgs)) {
        // 2-inserir os fucionarios no bd
        $sql = "INSERT INTO funcionarios (nome, CPF, genero, setor, carga)
           VALUES (?, ?, ?, ?, ?)";

        $stm = $conexao->prepare($sql);
        $stm->execute([$nome, $CPF, $genero, $setor, $carga]);

        //3- redirecionar para a pagina de listagem
        header("location: funcionarios.php");
    } else {
        //exibir as msgs de erro
        $msgErro = implode("<br>", $msgs);
    }
}

$sql = "SELECT * FROM funcionarios";
$stm = $conexao->prepare($sql);
$stm->execute();
$func = $stm->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários da empresa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <style>
        body{
            background-color: #b8c1d0;
            font-family: "Playfair Display", serif;
        }
        h1{
            justify-content: center;
            display: flex;
        }
    </style>
</head>

<body>

    <h1>Cadastro de Funcionários da empresa</h1>

    <h3>Listagem</h3>

    <table border="1">
        <!-- Cabeçalho -->
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Genero</th>
            <th>Setor</th>
            <th>Carga Horária</th>
            <th> </th>
        </tr>

        <!-- Dados -->
        <?php foreach ($func as $f): ?>
            <tr>
                <td><?= $f["id"] ?></td>
                <td><?= $f["nome"] ?></td>
                <td><?= $f["CPF"]  ?></td>
                <td>
                    <?php
                    if ($f['genero'] == 'F')
                        echo "Feminino";
                    else if ($f['genero'] == 'M')
                        echo "Masculino";
                    else if ($f['genero'] == 'N')
                        echo "Não informar";
                    ?>
                </td>
                <td>
                    <?php
                    if ($f['setor'] == 'A')
                        echo "Administrativo";
                    else if ($f['setor'] == 'F')
                        echo "Financeiro";
                    else if ($f['setor'] == 'RH')
                        echo "Recursos Humanos";
                    else if ($f['setor'] == 'M')
                        echo "Marketing";
                    ?></td>
                <td><?= $f["carga"]  ?></td>
                <td>
                    <a href="funcionarios_excluir.php?id=<?= $f['id'] ?>"
                        onclick="if(! confirm('Confirma a exclusão?')) return false;">Excluir</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>


    <h3>Formulário</h3>
    <!-- <form action="" method="POST" onsubmit="return validarForm();"> -->
    <form action="" method="POST">

        <input type="text" placeholder="Informe o nome"
            name="nome" id="nome"
            value="<?= $nome ?>">

        <br><br>

        <input type="text" placeholder="Informe o CPF"
            name="CPF" id="CPF"
            value="<?= $CPF ?>">

        <br><br>

        <select name="genero" id="genero">
            <option value="">---Selecione o gênero---</option>
            <option value="F" <?= $genero == "F" ? "selected" : "" ?>>Feminino</option>
            <option value="M" <?= $genero == "M" ? "selected" : "" ?>>Masculino</option>
            <option value="N" <?= $genero == "N" ? "selected" : "" ?>>Não informar</option>
        </select>

        <br><br>

        <select name="setor" id="setor">
            <option value="">---Selecione o setor---</option>
            <option value="A" <?= $setor == "A" ? "selected" : "" ?>>Administrativo</option>
            <option value="F" <?= $setor == "F" ? "selected" : "" ?>>Financeiro</option>
            <option value="RH" <?= $setor == "RH" ? "selected" : "" ?>>Recursos Humanos</option>
            <option value="M" <?= $setor == "M" ? "selected" : "" ?>>Marketing</option>
        </select>

        <br><br>

        <input type="text" placeholder="Informe a Carga Horária"
            name="carga" id="carga"
            value="<?= $carga ?>">

        <br><br>

        <button>Cadastrar</button>

    </form>

    <div id="msgErro" style="color: red; display: none;">
        Exemplo de erro!
    </div>

    <div style="color: red;">
        <?= $msgErro ?>
    </div>

    <script src="validacao.js"></script>

</body>

</html>