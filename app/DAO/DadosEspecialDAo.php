<?php 
class DadosEspecial
{

    public $conexao;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3306; dbname=fichagot';
        $this -> conexao = new PDO($dsn, 'root', '');
    }
    
    public function selectDados(string $id)
    {
        $sql = 'SELECT * FROM dadosespecial WHERE habilidades = ?';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $id);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);

    }

    public function update(string $habilidades,string $primeirodado, string $segundodado,
    string $terceirodado, string $quartodado, string $quintodado, string $sextodado, string $setimodado,
    string $oitavodado, string $nonodado)
    {
        $sql = "UPDATE dadosespecial SET primeirodado = ?,segundodado = ?,terceirodado = ?, quartodado = ?, quintodado = ?, sextodado = ?, setimodado = ?, oitavodado = ?, nonodado = ?  WHERE habilidades = ?";
        $stmt = $this -> conexao -> prepare($sql);
        $stmt ->bindValue(1, $primeirodado);
        $stmt -> bindValue(2, $segundodado);
        $stmt ->bindValue(3, $terceirodado);
        $stmt -> bindValue(4, $quartodado);
        $stmt ->bindValue(5, $quintodado);
        $stmt -> bindValue(6, $sextodado);
        $stmt ->bindValue(7, $setimodado);
        $stmt -> bindValue(8, $oitavodado);
        $stmt -> bindValue(9, $nonodado);
        $stmt -> bindValue(10, $habilidades);
        $stmt -> execute();
    }

    public function somaDado(string $habilidade)
    {
        $sql = 'SELECT primeirodado + segundodado + terceirodado + quartodado + quintodado +
        sextodado + setimodado + oitavodado +nonodado FROM dadosespecial 
        WHERE habilidades = ?;';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $habilidade);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }

 
}