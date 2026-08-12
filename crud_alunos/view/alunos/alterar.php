<?php
require_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = NULL;
$alunoCont = new AlunoController();

//Verifica se o usuario ja clicou no gravar
if (isset($_POST['nome'])) {
    //atualizar o aluno no banco de dados

    $id = $_POST["id"];
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : NULL;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : NULL;
    $estrang = trim($_POST['estrangeiro']) ? trim($_POST['estrangeiro']) : NULL;
    $idCurso = trim($_POST['curso']) ? trim($_POST['curso']) : NULL;

    //criar um objeto aluno pra persisti-lo

    $aluno = new Aluno();
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrang);
    $aluno->setId($id);

    $curso = new Curso();
    $curso->setId($idCurso);
    $aluno->setCurso($curso);

    

    //Validar e Salvar os dados no banco
    $erros = $alunoCont->alterar($aluno);
    if (empty($erros)) 
        header("location: listar.php");
        else
            $msgErro = implode("<br>", $erros);
    } else {
        //Carregar os dados do aluno a ser alterado
        $id = 0;
        if (isset($_GET['id']))
            $id = $_GET['id'];


        $aluno = $alunoCont->buscarPorId($id);
        if (! $aluno) {
            echo "ID do aluno não informado!<br>";
            echo "<a href= 'listar.php'>Voltar</a>";
            exit;
        }
    }


require_once(__DIR__ . "/form.php");
