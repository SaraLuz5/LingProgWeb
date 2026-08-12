<?php
require_once(__DIR__ . "/../service/AlunoService.php");
require_once(__DIR__ . "/../dao/AlunoDAO.php");

class AlunoController
{

    private AlunoDAO $alunoDao;
    private AlunoService $alunoService;

    public function __construct()
    { $this->alunoDao = new AlunoDao();
      $this->alunoService = new AlunoService;
    }

    public function listar()
    {
        $alunoDao = new AlunoDao;
        return $this->alunoDao->list();
    }

    public function buscarPorId(int $id){
       return $this->alunoDao->findById($id);
    }

    public function inserir($aluno)
    {
        //validar os dados
        $erros = $this->alunoService->validar($aluno);

        //persistir os dados
        if(empty($erros)){
          $erroDAO = $this->alunoDao->insert($aluno);
          if($erroDAO)
            array_push($erros, $erroDAO);
        }
        return $erros;
    }

    public function alterar($aluno){
        
        $erros = $this->alunoService->validar($aluno);

        //persistir os dados
        if(empty($erros)){
          $erroDAO = $this->alunoDao->update($aluno);
          if($erroDAO)
            array_push($erros, $erroDAO);
        }
        return $erros;
    }

    public function excluir(int $id){
        return $this->alunoDao->excluir($id);
    }
}
