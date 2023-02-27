<?php
class EspecialidadesDao
{
    public $conexao;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3306; dbname=fichagot';
        $this -> conexao = new PDO($dsn, 'root', '');
    }

    public function selectByHabilidade(string $habilidade)
    {
        include_once 'Model/EspecialidadesModel.php';
        $sql = 'SELECT * FROM especializacoes WHERE habilidades = ?';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $habilidade);
        $stmt -> execute();

        return $stmt -> fetchObject("EspecialidadesModel");

    }

       
    public function selectDados(string $id)
    {
        $sql = 'SELECT * FROM dadosespecial WHERE habilidades = ?';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $id);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);

    }

    public function updateEspecial($habilidade, $especialum,$especialdois,$especialtres,$especialquatro,$especialcinco,$especialseis,$especialsete,$especialoito,$especialnove)
    {
        $sql = "UPDATE especializacoes SET especialum = ?,especialdois = ?,especialtres = ?, especialquatro= ?, especialcinco = ?, especialseis= ?, especialsete = ?, especialoito = ?, especialnove = ?  WHERE habilidades = ?";
        $stmt = $this -> conexao -> prepare($sql);
        $stmt ->bindValue(1, $especialum);
        $stmt -> bindValue(2, $especialdois);
        $stmt ->bindValue(3, $especialtres);
        $stmt -> bindValue(4, $especialquatro);
        $stmt ->bindValue(5, $especialcinco);
        $stmt -> bindValue(6, $especialseis);
        $stmt ->bindValue(7, $especialsete);
        $stmt -> bindValue(8, $especialoito);
        $stmt -> bindValue(9, $especialnove);
        $stmt -> bindValue(10, $habilidade);
        $stmt -> execute();
    }

    public function selectNotificacao(string $notificacao)
    {
        $sql = 'SELECT primeirodado + segundodado + terceirodado + quartodado + quintodado +sextodado +setimodado + oitavodado + nonodado AS total  FROM dadosespecial WHERE habilidades = ?';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue(1, $notificacao);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }

}