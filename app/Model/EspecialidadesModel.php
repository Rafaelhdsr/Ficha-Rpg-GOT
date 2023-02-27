<?php 
class EspecialidadesModel
{
    public $somadado;

    public function getById(string $id)
    {
        include_once 'DAO/EspecialidadesDao.php';
        $dao = new EspecialidadesDao();

        return $dao -> selectByHabilidade($id);
    }

    public function updateDados(string $habilidades,string $primeirodado, string $segundodado,
    string $terceirodado, string $quartodado, string $quintodado, string $sextodado, string $setimodado,
    string $oitavodado, string $nonodado)
    {
       include_once 'DAO/DadosEspecialDAo.php';
       $dao = new DadosEspecial();
       $dao ->update($habilidades,$primeirodado,$segundodado,$terceirodado,$quartodado,$quintodado,$sextodado,$setimodado,$oitavodado,$nonodado);
    }

    public function updateespecial(string $habilidade, string $especialum, string $especialdois,string $especialtres,string $especialquatro,string $especialcinco,string $especialseis,string $especialsete,string $especialoito, string $especialnove)
    {
        include_once 'DAO/EspecialidadesDao.php';
        $dao = new EspecialidadesDao();
        $dao -> updateEspecial($habilidade, $especialum,$especialdois,$especialtres,$especialquatro,$especialcinco,$especialseis,$especialsete,$especialoito,$especialnove);

    }

    public function getByidDados(string $id)
    {
        include_once 'DAO/DadosEspecialDAo.php';
        $dao = new DadosEspecial();
        return $dao -> selectDados($id);
    }

    public function selectNotificacao(string $notificacao)
    {
        include_once 'DAO/EspecialidadesDao.php';
        $dao = new EspecialidadesDao();
        return $dao -> selectNotificacao($notificacao);

    }


}
