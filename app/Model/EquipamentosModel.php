<?php
class EquipamentosModel
{
    public $armaduras = [];
    public $armasContusao = [];
    public $armasHaste = [];
    public $armasBriga = [];
    public $armasEscudos = [];
    public $armasEsgrima = [];
    public $armasCurtas = [];
    public $armasLongas = [];
   
    

    

    public function insert(array $id)
    {
        include_once 'DAO/EquipamentosDao.php';
        $dao = new EquipamentosDao();
        $nome = $id[0];
        $valor = $id[1];
        $dao -> insert($nome, $valor);
    }

    public function exibeArmadura()
    {
        include_once 'DAO/EquipamentosDao.php';
        $dao = new EquipamentosDao();
        return $dao -> select();

    }

    public function delete (int $id)
    {
        include_once 'DAO/EquipamentosDao.php';
        $dao = new EquipamentosDao();
        $dao ->delete($id);

    }

    public function selectDinheiro()
    {
        include_once 'DAO/EquipamentosDao.php';
        $dao = new EquipamentosDao();
        return $dao -> selectDinheiro();
    }

    public function updateDinheiro(float $valor)
    {
        include_once 'DAO/EquipamentosDao.php';
        $dao = new EquipamentosDao();
        $dao -> updateDinhheiro($valor);

    }
}