<?php
require_once __DIR__ . 'C:\Turma2\xampp\htdocs\Revisao\PHP, HTMl e CSS\MVC\Model\model.php';

class AlunoController {
    private $model;
    

    public function atualizar($id, $dados) {
        return $this->model->atualizar($id, $dados['nome'], $dados['idade']);
    }

    public function excluir($id) {
        return $this->model->excluir($id);
    }
}
