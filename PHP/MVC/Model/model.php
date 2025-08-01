<?php
class Aluno {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function atualizar($id, $nome, $idade) {
        $stmt = $this->pdo->prepare("UPDATE alunos SET nome = :nome, idade = :idade WHERE id = :id");
        return $stmt->execute([
            'nome' => $nome,
            'idade' => $idade,
            'id' => $id
        ]);
    }

    public function excluir($id) {
        $stmt = $this->pdo->prepare("DELETE FROM alunos WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
