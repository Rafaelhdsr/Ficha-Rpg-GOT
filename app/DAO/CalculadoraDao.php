<?php 
class CalculadoraDao
{
    
    public $conexao;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3306; dbname=fichagot';
        $this -> conexao = new PDO($dsn, 'root', '');
    }


    public function updateCalculadora(string $dinheiro)
    {
        $sql = 'UPDATE calculadora SET dinheiro = ? WHERE id = 0';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $dinheiro);
        $stmt -> execute();
        
    }

    public function updateCalculadoraDois(string $dinheiro)
    {
        $sql = 'UPDATE calculadoradois SET dinheiro = ? WHERE id = 0';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $dinheiro);
        $stmt -> execute();
        
    }

    public function selcetCalculadora()
    {
        $sql = 'SELECT * FROM calculadora WHERE id = 0';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);

    }

    public function selcetCalculadoraDois()
    {
        $sql = 'SELECT * FROM calculadoradois WHERE id = 0';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);
        
    }
}