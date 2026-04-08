<?php

if(isset($_GET['cor'])&& $_GET['cor'] !=''){
    $cor = $_GET['cor'];

    echo"<body style='background-color: " . $cor . ";'></body>";
}else
echo "Informe o parâmetro cor";