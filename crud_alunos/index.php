<?php
require_once(__DIR__ . "/view/include/header.php");
require_once(__DIR__ . "/view/include/menu.php");
?>

<div class="card">
    <img class="card-image-top mx-auto"
        src="img/card_alunos.png"
        style="max-width: 200px; height:auto;" />

    <div class="card-body text-center">
        <h5 class="card-title">Alunos</h5>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <a href="<?= BASE_URL ?>/view/alunos/listar.php" class="card-link">
                Listagem de Alunos</a>
        </li>
    </ul>
</div>
</div>
</div>
<?php
require_once(__DIR__ . "/view/include/footer.php");
?>