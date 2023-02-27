<?php
class HabilidadesModel
{
    public $total;
    public $pontosHabilidades;
    public $a;
    public $rows;
    
    public function save()
    {
        include 'DAO/HabilidadesDao.php';
        $dao = new HabilidadesDao();
        $dao -> update($this);
    }

    public function getAllRows()
    {
        include 'DAO/HabilidadesDao.php';
        $dao = new HabilidadesDao();
        $this -> rows = $dao -> selectHabilidades();
        $total = $this -> total = $dao -> somarHabilidades();
        $pontosHabilidades = $this -> pontosHabilidades = $dao -> selectIdade();
    }

    public function somaDado(string $habilidade)
    {
        include_once 'DAO/DadosEspecialDAo.php';
        $dao = new DadosEspecial();
        return $dao -> somaDado($habilidade);

    }

}