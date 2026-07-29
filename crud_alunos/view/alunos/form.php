<?php
require_once(__DIR__ . "/../include/header.php");
require_once(__DIR__ . "/../../controller/CursoController.php");

$cursoController = new CursoController();
$cursos = $cursoController->listar();
?>

<h3>Inserir Alunos</h3>

<form action="" method="POST">

<div>
    <label for="">Nome: </label>
    <input type="text" id="txtNome" placeholder="Informe o nome">
</div>

<div>
    <label for="">Idade: </label>
    <input type="number" id="txtIdade" placeholder="Informe a idade">
</div>

<div>
    <label for="">Estrangeiro: </label>
       <select name="estrangeiro" id="selEstrangeiro">
    <option value="">-----Selecione-----</option>
    <option value="S">Sim</option>
    <option value="N">Não</option>
    </select> 
</div>

<div>
    <label for="selCurso">Curso: </label>
    <select name="curso" id="selCurso">
        <option value="">-----Selecione-----</option>
    
        <?php foreach($cursos as $c): ?>
            <option value="<?= $c->getId()?>"><?= $c ?></option>
        <?php endforeach; ?>


    </select>
</div>

<div>
    <button type="submit">Gravar</button>
</div>

</form>

<?php
require_once(__DIR__ . "/../include/footer.php");
?>