<?php
require_once(__DIR__ . "/../dao/AlunoDAO.php");

class AlunoController{

public function listar(){
    $alunoDao = new AlunoDao;
    return $alunoDao->list(

    );
}
}