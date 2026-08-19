<?php
require_once(__DIR__ . "/../../model/Aluno.php");
require_once(__DIR__ . "/../../model/Curso.php");
require_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = " ";
$aluno = NULL;


//verifica se o formulario ja foi submetido
if (isset($_POST['nome'])) {

    //capturar os dados preenchidos no formulário

    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : NULL;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : NULL;
    $estrang = trim($_POST['estrangeiro']) ? trim($_POST['estrangeiro']) : NULL;
    $idCurso = trim($_POST['curso']) ? trim($_POST['curso']) : NULL;

    //criar um objeto aluno pra persisti-lo

    $aluno = new Aluno();
    $aluno->setId(0);
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrang);

    $curso = new Curso();
    $curso->setId($idCurso);
    $aluno->setCurso($curso);


    //validar os dados
    //pesistir o objeto

    $alunoCont = new AlunoController();
    $erros = $alunoCont->inserir($aluno);

    if (empty($erros))
        header("location: listar.php");
    else
        $msgErro = implode("<br>", $erros);
}

require_once(__DIR__ . "/form.php");
