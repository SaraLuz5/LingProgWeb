<?php


require_once(__DIR__ . "/../../controller/AlunoController.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

     $alunoCont = new AlunoController();
     $erro= $alunoCont->excluir($id);

     if (! $erro){
        header("location: listar.php");
    } else {
        echo $erro;
        echo "<br><a href='listar.php'>Volar</a>";
    }

} else {
    echo "ID do aluno não informado!<br>";
    echo "<a href= 'listar.php'>Voltar</a>";
}

    
  


