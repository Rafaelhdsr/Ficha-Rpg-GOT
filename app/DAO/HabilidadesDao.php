<?php
class HabilidadesDao
{
    public $conexao;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3306; dbname=fichagot';
        $this -> conexao = new PDO($dsn, 'root', '');
    }

    
    public function insert(HabilidadesModel $model)
    {
        $sql = 'INSERT INTO habilidades(agilidade,atletismo,cura, estatus, vigor,conhecimento,luta,guerra,percepcao, persuasao, enganacao, idioma, ladinagem, vontade, lidar, astucia, sobrevivencia, 
        pontaria, furtividade) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

        $stmt = $this ->conexao->prepare($sql);
        $stmt -> bindValue(1, $model -> agilidade);
        $stmt -> bindValue(2, $model -> atletismo);
        $stmt -> bindValue(3, $model -> cura);
        $stmt -> bindValue(4, $model -> estatus);
        $stmt -> bindValue(5, $model -> vigor);
        $stmt -> bindValue(6, $model -> conhecimento);
        $stmt -> bindValue(7, $model -> luta);
        $stmt -> bindValue(8, $model -> guerra);
        $stmt -> bindValue(9, $model -> percepcao);
        $stmt -> bindValue(10, $model -> persuasao);
        $stmt -> bindValue(11, $model -> enganacao);
        $stmt -> bindValue(12, $model -> idioma);
        $stmt -> bindValue(13, $model -> ladinagem);
        $stmt -> bindValue(14, $model -> vontade);
        $stmt -> bindValue(15, $model -> lidar);
        $stmt -> bindValue(16, $model -> astucia);
        $stmt -> bindValue(17, $model -> sobrevivencia);
        $stmt -> bindValue(18, $model -> pontaria);
        $stmt -> bindValue(19, $model -> furtividade);
        $stmt -> execute();

    }

    public function selectIdade()
    {
        $sql = 'SELECT * FROM idade;';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }

    
    public function update(HabilidadesModel $model)
    {
        $sql = 'UPDATE habilidades SET agilidade=?,atletismo=?,cura=?, estatus=?, vigor=?,conhecimento=?,luta=?,guerra=?,percepcao=?, persuasao=?, enganacao=?, idioma=?, ladinagem=?, vontade=?, lidar=?, astucia=?, sobrevivencia=?,pontaria=?, furtividade=?  WHERE id= 1';
        $stmt = $this ->conexao->prepare($sql);
        $stmt -> bindValue(1, $model -> agilidade);
        $stmt -> bindValue(2, $model -> atletismo);
        $stmt -> bindValue(3, $model -> cura);
        $stmt -> bindValue(4, $model -> estatus);
        $stmt -> bindValue(5, $model -> vigor);
        $stmt -> bindValue(6, $model -> conhecimento);
        $stmt -> bindValue(7, $model -> luta);
        $stmt -> bindValue(8, $model -> guerra);
        $stmt -> bindValue(9, $model -> percepcao);
        $stmt -> bindValue(10, $model -> persuasao);
        $stmt -> bindValue(11, $model -> enganacao);
        $stmt -> bindValue(12, $model -> idioma);
        $stmt -> bindValue(13, $model -> ladinagem);
        $stmt -> bindValue(14, $model -> vontade);
        $stmt -> bindValue(15, $model -> lidar);
        $stmt -> bindValue(16, $model -> astucia);
        $stmt -> bindValue(17, $model -> sobrevivencia);
        $stmt -> bindValue(18, $model -> pontaria);
        $stmt -> bindValue(19, $model -> furtividade);
        $stmt -> execute();

    }

    public function somarHabilidades()
    {
        $sql = 'SELECT agilidade + atletismo + vigor+ cura + idioma + luta + guerra + ladinagem + furtividade
        + persuasao + percepcao + sobrevivencia + estatus + vontade + conhecimento + enganacao + lidar + astucia + pontaria - 38 AS total FROM habilidades';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_CLASS);

    }

    public function selectHabilidades()
    {
        $sql = 'SELECT * FROM habilidades WHERE id = 1';
        $stmt = $this -> conexao ->prepare($sql);
        $stmt -> execute();

        return $stmt ->fetchAll(PDO::FETCH_CLASS);
    }


    
}

