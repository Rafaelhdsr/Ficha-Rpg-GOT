<?php
class FichaDao
{
    public $conexao;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3306; dbname=fichagot';
        $this -> conexao = new PDO($dsn, 'root', '');
    }

    public function select()
    {
        $sql = 'SELECT * FROM inicio WHERE id = 1';
        $stmt = $this -> conexao ->prepare($sql);
        $stmt -> execute();

        return $stmt ->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert(FichaModel $model)
    {
        $sql = 'INSERT INTO inicio (nome, idade, sexo, jogador, casa) VALUES (?,?,?,?,?)';
        $stmt = $this ->conexao->prepare($sql);
        $stmt -> bindValue(1, $model -> nome);
        $stmt -> bindValue(2, $model -> idade);
        $stmt -> bindValue(3, $model -> sexo);
        $stmt -> bindValue(4, $model -> jogador);
        $stmt -> bindValue(5, $model -> casa);
        $stmt -> execute();

    }

    public function updatePontosEspecial(string $id)
    {
        $sql = 'UPDATE pontosespecialidade SET pontos = ?';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $id);
        $stmt -> execute();
    }

    public function selectPontosEspecial()
    {
        $sql = 'SELECT * FROM pontosespecialidade';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }

    public function updateIdade(int $id)
    {
        $sql = 'UPDATE idade SET idade = ?';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt ->bindValue(1, $id);
        $stmt -> execute();
    }

    public function exibeIdade()
    {
        $sql = 'SELECT * FROM idade;';
        $stmt = $this -> conexao ->prepare($sql);
        $stmt -> execute();

        return $stmt ->fetchAll(PDO::FETCH_CLASS);
    }

    public function update(FichaModel $model)
    {
        $sql = 'UPDATE inicio SET nome =?, idade =?, sexo=?, jogador=?, casa=? WHERE id= 1';
        $stmt = $this ->conexao->prepare($sql);
        $stmt -> bindValue(1, $model -> nome);
        $stmt -> bindValue(2, $model -> idade);
        $stmt -> bindValue(3, $model -> sexo);
        $stmt -> bindValue(4, $model -> jogador);
        $stmt -> bindValue(5, $model -> casa);
        $stmt -> execute();

    }
}