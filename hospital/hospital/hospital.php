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
$especialidade = "";
$CRM = "";

//Receber os dados do formularios
if (isset($_POST['nome'])) {
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $CPF = is_numeric($_POST['CPF']) ? $_POST['CPF'] : null;
    $genero = trim($_POST['genero']) ? trim($_POST['genero']) : null;
    $especialidade = trim($_POST['especialidade']) ? trim($_POST['especialidade']) : null;
    $CRM = is_numeric($_POST['CRM']) ? ($_POST['CRM']) : null;

    // 1.1-Validar os dados
    $msgs = array();
    if (! $nome)
        array_push($msgs, "Informe o nome do médico");

    if (! $CPF)
        array_push($msgs, "Informe o CPF");
    elseif (strlen($CPF) != 11) {
        array_push($msgs, "O CPF não é válido!");
    }

    if (! $genero)
        array_push($msgs, "Informe o gênero");

    if (! $especialidade)
        array_push($msgs, "Informe a especialidade do(a) médico(a)");

    if (! $CRM)
        array_push($msgs, "Informe o CRM");
    elseif (strlen($CRM) != 9) {
        array_push($msgs, "O CRM não é válido!");
    }

    if (empty($msgs)) {
        // 2-inserir os fucionarios no bd
        $sql = "INSERT INTO hospital (nome, CPF, genero, especialidade, CRM)
           VALUES (?, ?, ?, ?, ?)";

        $stm = $conexao->prepare($sql);
        $stm->execute([$nome, $CPF, $genero, $especialidade, $CRM]);

        //3- redirecionar para a pagina de listagem
        header("location:hospital.php");
        exit;
    } else {
        //exibir as msgs de erro
        $msgErro = implode("<br>", $msgs);
    }
}


$sql = "SELECT * FROM hospital";
$stm = $conexao->prepare($sql);
$stm->execute();
$func = $stm->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Médicos de um Hospital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #d8dee7;
            font-family: "Playfair Display", serif;
        }

        h1 {
            justify-content: center;
            display: flex;
            font-family: "PT Serif", serif;
        }

        h3 {
            font-family: "PT Serif", serif;

        }

        h2 {
            justify-content: center;
            display: flex;
            font-family: "PT Serif", serif;
        }

        div{
            justify-content: center;
            display: flex;
        
        }
    </style>
</head>

<body>

    <h1>Cadastro de Médicos de um Hospital</h1>

    <h2>Formulário</h2>
    <!-- <form action="" method="POST" onsubmit="return validarForm();"> -->
    <form action="" method="POST">

        <div class="nome">
            <input type="text" placeholder="Informe o nome"
                name="nome" id="nome"
                value="<?= $nome ?>">
        </div>
        <br><br>

      
        <div class="CPF">
        <input type="text" placeholder="Informe o CPF"
            name="CPF" id="CPF"
            value="<?= $CPF ?>">
        </div>
        <br><br>

        <div class="genero">
        <select name="genero" id="genero">
            <option value="">---Selecione o gênero---</option>
            <option value="F" <?= $genero == "F" ? "selected" : "" ?>>Feminino</option>
            <option value="M" <?= $genero == "M" ? "selected" : "" ?>>Masculino</option>
            <option value="N" <?= $genero == "N" ? "selected" : "" ?>>Não informar</option>
        </select>
        </div>
        <br><br>

        <div class="especialidade">
        <select name="especialidade" id="especialidade">
            <option value="">---Selecione a especialidade---</option>
            <option value="GO" <?= $especialidade == "GO" ? "selected" : "" ?>>Ginecologista Obstetra</option>
            <option value="C" <?= $especialidade == "C" ? "selected" : "" ?>>Cardiologista</option>
            <option value="G" <?= $especialidade == "G" ? "selected" : "" ?>>Clínico Geral</option>
            <option value="D" <?= $especialidade == "D" ? "selected" : "" ?>>Dermatologista</option>
            <option value="P" <?= $especialidade == "P" ? "selected" : "" ?>>Pediatra</option>
            <option value="N" <?= $especialidade == "N" ? "selected" : "" ?>>Neurologista</option>
        </select>
        </div>

        <br><br>

        <div class="CRM">
        <input type="text" placeholder="Informe o CRM"
            name="CRM" id="CRM"
            value="<?= $CRM ?>">
        </div>
        <br><br>

        <div class="CRM">
        <button>Cadastrar</button>
        </div>
    </form>

    <h3>Listagem</h3>

    <table border="1">
        <!-- Cabeçalho -->
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Genero</th>
            <th>Especialidade</th>
            <th>CRM</th>
            <th> </th>
        </tr>

        <!-- Dados -->
        <?php foreach ($func as $f): ?>
            <tr>
                <td><?= $f["id"] ?></td>
                <td><?= htmlspecialchars($f["nome"]) ?></td>
                <td><?= htmlspecialchars($f["CPF"])  ?></td>
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
                    if ($f['especialidade'] == 'GO')
                        echo "Ginecologista Obstetra";
                    else if ($f['especialidade'] == 'C')
                        echo "Cardiologista";
                    else if ($f['especialidade'] == 'G')
                        echo "Clínico Geral";
                    else if ($f['especialidade'] == 'D')
                        echo "Dermatologista";
                    else if ($f['especialidade'] == 'P')
                        echo "Pediatra";
                    else if ($f['especialidade'] == 'N')
                        echo "Neurologista";
                    ?></td>
                <td><?= htmlspecialchars($f["CRM"])  ?></td>
                <td>
                    <a href="HospitalExcluir.php?id=<?= $f['id'] ?>"
                        onclick="if(! confirm('Confirma a exclusão?')) return false;">Excluir</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>


    <div id="msgErro" style="color: red; display: none;">
        Exemplo de erro!
    </div>

    <div style="color: red;">
        <?= $msgErro ?>
    </div>

    <script src="Validacao.js"></script>

</body>

</html>