<?php
require_once(__DIR__ . "/../dao/CursoDAO.php");

class CursoController
{

    public function listar()
    {
        $cursoDao = new CursoDao;
        return $cursoDao->list();
    }
}
