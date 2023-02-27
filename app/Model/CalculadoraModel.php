<?php 
class CalculadoraModel
{
    public function calculadora(string $dinheiro)
    {
        include_once "DAO/CalculadoraDao.php";
        $dao = new CalculadoraDao;
        $dao -> updateCalculadora($dinheiro);
        

    }

    public function calculadoradois(string $dinheiro)
    {
        include_once "DAO/CalculadoraDao.php";
        $dao = new CalculadoraDao;
        $dao -> updateCalculadoraDois($dinheiro);
        

    }

    public function selectCalculadora()
    {
        include_once "DAO/CalculadoraDao.php";
        $dao = new CalculadoraDao;
        return $dao -> selcetCalculadora();
    }

    public function selectCalculadoraDois()
    {
        include_once "DAO/CalculadoraDao.php";
        $dao = new CalculadoraDao;
        return $dao -> selcetCalculadoraDois();
    }

   
}