<?php
require_once(__DIR__ . "/../include/header.php");
require_once(__DIR__ . "/../../controller/CursoController.php");

$cursoController = new CursoController();
$cursos = $cursoController->listar();
?>


<h3>Inserir Alunos</h3>

<form action="" method="POST">

    <div>
        <label for="txtNome">Nome:</label>
        <input type="text" id="txtNome" name="nome" placeholder="Informe o nome"
            value="<?= $aluno ? $aluno->getNome() : '' ?>">
    </div>

    <div>
        <label for="txtIdade">Idade: </label>
        <input type="number" id="txtIdade" placeholder="Informe a idade" name="idade"
            value="<?= $aluno != null ? $aluno->getIdade() : '' ?>">
    </div>

    <div>
        <label for="selEstrang">Estrangeiro: </label>
        <select name="estrangeiro" id="selEstrangeiro">
            <option value="">-----Selecione-----</option>
            <option value="S" <?= $aluno && $aluno->getEstrangeiro() == 'S' ? 'selected' : '' ?>>Sim</option>
            <option value="N" <?= $aluno && $aluno->getEstrangeiro() == 'N' ? 'selected' : '' ?>>Não</option>
        </select>
    </div>

    <div>
        <label for="selCurso">Curso: </label>
        <select name="curso" id="selCurso">
            <option value="">-----Selecione-----</option>

            <?php foreach ($cursos as $c): ?>
                <option value="<?= $c->getId() ?>"
                <?php 
                if ($aluno && $aluno->getCurso()->getId() == $c->getId())
                    echo "selected"; 
                ?>
                >
                <?= $c ?></option>
            <?php endforeach; ?>


        </select>
    </div>

    <div>

          <input type="hidden" name="id"
          value="<?= $aluno ? $aluno->getId() : 0 ?>">
    </div>

    <div>
        <button type="submit">Gravar</button>
    </div>

    <div style="color: red;">
        <?= $msgErro; ?>
    </div>


    <br> 
    
    <div>
        <a href="listar.php">Voltar</a>
    </div>



</form>

<?php
require_once(__DIR__ . "/../include/footer.php");
?>