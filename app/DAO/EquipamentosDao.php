<?php
class EquipamentosDao
{
    public $conexao;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3306; dbname=fichagot';
        $this -> conexao = new PDO($dsn, 'root', '');
    }

    public function insert(string $nome, int $valor)
    {
        $sql =  'INSERT INTO armaduras(nome,valor) VALUES(?,?)';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $nome);
        $stmt -> bindValue(2, $valor);
        $stmt -> execute();
        
    }

    public function select()
    {
        $sql = 'SELECT nome, id, valor FROM armaduras';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM armaduras WHERE id =?';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $id);
        $stmt -> execute();
    }

    public function selectDinheiro()
    {
        $sql = 'SELECT * FROM dinheiro';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }

    public function updateDinhheiro(float $valor)
    {
        $sql = 'UPDATE dinheiro SET valor = ?';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $valor);
        $stmt -> execute();
    }



    
}
