<?php
class FichaModel
{
    public $id, $nome, $idade , $sexo, $casa, $jogador;

    public $rows;
    public $idadetotal;
    public $pontosespecial;

    public function save()
    {
        include 'DAO/FichaDao.php';
        $dao = new FichaDao();
        $dao -> update($this);

    }

    public function getAllRows()
    {
        include 'DAO/FichaDao.php';
        $dao = new FichaDao();
        $this -> rows = $dao -> select();
        foreach($this -> rows as $item)
        {
            $id = $item -> idade;
        }

        $idParaDao = $this -> pontosIdade($id);
        $dao -> updateIdade($idParaDao);

        $idParaDaoEspecial = $this ->pontosespecial($id);
        $dao -> updatePontosEspecial($idParaDaoEspecial);
        $this -> pontosespecial = $dao -> selectPontosEspecial();
    }

    public function pontosespecial(string $id)
    {
        if((int)$id > 0 and (int)$id <= 9 )
      {
        $pontosEspecial = 40;
      }else{
        if((int) $id > 9 and (int)$id <= 13){
            $pontosEspecial = 40;
        }else{
            if((int)$id > 13 and (int)$id <= 18 )
            {
                $pontosEspecial= 60;
            }else{
                if((int)$id > 18 and (int)$id <= 30)
                {
                    $pontosEspecial = 80;
                }else{
                    if((int)$id > 30 and (int)$id <= 50)
                    {
                       $pontosEspecial = 100;
                    }else{
                        if((int)$id > 50 and (int)$id <= 70)
                        {
                            $pontosEspecial = 160;
                        }else{
                            if((int)$id > 70 and (int)$id <= 80)
                            {
                                $pontosEspecial = 200;
                            }else{
                                if((int)$id > 80)
                                {
                                    $pontosEspecial = 240;
                                }
                            }
                        }
                    }
                }
            }
        }
      }
      return $pontosEspecial;

    }

    public function pontosIdade(string $id):int
    {
      if((int)$id > 0 and (int)$id <= 9 )
      {
        $pontosIdade = 120;
      }else{
        if((int) $id > 9 and (int)$id <= 13){
            $pontosIdade = 150;
        }else{
            if((int)$id > 13 and (int)$id <= 18 )
            {
                $pontosIdade= 180;
            }else{
                if((int)$id > 18 and (int)$id <= 30)
                {
                    $pontosIdade = 210;
                }else{
                    if((int)$id > 30 and (int)$id <= 50)
                    {
                       $pontosIdade = 240;
                    }else{
                        if((int)$id > 50 and (int)$id <= 70)
                        {
                            $pontosIdade = 270;
                        }else{
                            if((int)$id > 70 and (int)$id <= 80)
                            {
                                $pontosIdade = 330;
                            }else{
                                if((int)$id > 80)
                                {
                                    $pontosIdade = 360;
                                }
                            }
                        }
                    }
                }
            }
        }
      }
      return $pontosIdade;
    }
}