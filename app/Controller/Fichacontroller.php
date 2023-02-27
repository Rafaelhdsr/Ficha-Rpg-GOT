<?php
include 'autoload.php';
class Fichacontroller
{
    public static function index()
    {
        include 'View/modules/fichaemcima/FormInicio.php';
    }

    /*Exibe o Perfil*/
    public static function form()
    {
        include 'Model/FichaModel.php';
        $model = new FichaModel();
        $model -> getAllRows();
        include 'View/modules/fichaemcima/FormFicha.php';
    }

    /*Exibe as Habilidades*/
    public static function habilidades()
    {
        include_once 'Model/HabilidadesModel.php';
        include_once 'Model/FichaModel.php';
        include_once 'Model/EspecialidadesModel.php';
        ini_set('display_errors', 0 );
        error_reporting(0);
        $modelespecialobj = new EspecialidadesModel();
        $model = $modelespecialobj -> getById((string) $_GET['id']);
        $model = new HabilidadesModel();
        $model -> getAllRows();

        
        $arraydehabilidade = [];
        $arraydehabilidade[] = 'agilidade';
        $arraydehabilidade[]= 'atletismo';
        $arraydehabilidade[] = 'vigor';
        $arraydehabilidade[]= 'cura';
        $arraydehabilidade[] = 'percepcao';
        $arraydehabilidade[] = 'persuasao';
        $arraydehabilidade[] = 'conhecimento';
        $arraydehabilidade[]= 'idioma';
        $arraydehabilidade[] = 'luta';
        $arraydehabilidade[]='guerra';
        $arraydehabilidade[]='furtividade';
        $arraydehabilidade[]='ladinagem';
        $arraydehabilidade[] = 'estatus';
        $arraydehabilidade[]= 'lidar';
        $arraydehabilidade[]= 'astucia';
        $arraydehabilidade[]= 'sobrevivencia';
        $arraydehabilidade[]= 'vontade';
        $arraydehabilidade[]= 'pontaria';
        $arraydehabilidade[]= 'enganacao';

        foreach($arraydehabilidade as $item)
        {
            
            $notificacao []=  $modelespecialobj ->selectNotificacao($item);
            
        }
        $id = 0;
       for($i = 0; $i <=19; $i++)
       {
        
        foreach($notificacao[$id] as $item)
        {
            $exibeNotificacao []= $item -> total;
            $id = $id + 1;
        }
       }

        foreach($model -> total as $item)
        {
            if($item -> total < 0){
                if ($item -> total = 37){
                    $item -> total = 0;
                    $pontosadicionais = 50;
                }
                $item -> total = 0;
            }
        }
   
        include 'View/modules/fichaemcima/FormHabilidades.php';
        
    }

    /*Exibe as Especialidades*/
    public static function especialidades()
    {
        include_once 'Model/EspecialidadesModel.php';
        include_once 'Model/FichaModel.php';
        $modelespecialobj = new EspecialidadesModel();
        $model = $modelespecialobj -> getById((string) $_GET['id']);
        $modeloDados = $modelespecialobj -> getByidDados((string) $_GET['id']);
        $novamodel = new FichaModel();
        $novamodel -> getAllRows();
        include 'View/modules/fichaemcima/FormEspecialidades.php';

    }

    /*Botao de Salvar a descrição das Especialidades*/
    public static function especialidadeTextosave()
    {
        include_once 'Model/EspecialidadesModel.php';
        $modelespecialobj = new EspecialidadesModel();
        
         $habilidade = $_POST['habilidades'];
         $especialum = $_POST['especialum'];
         $especialdois = $_POST['especialdois'];
         $especialtres = $_POST['especialtres'];
         $especialquatro = $_POST['especialquatro'];
         $especialcinco = $_POST['especialcinco'];
         $especialseis = $_POST['especialseis'];
         $especialsete = $_POST['especialsete'];
         $especialoito = $_POST['especialoito'];
         $especialnove = $_POST['especialnove'];
        $modelespecialobj ->updateespecial($habilidade, $especialum,$especialdois,$especialtres,$especialquatro,$especialcinco,$especialseis,$especialsete,$especialoito,$especialnove);
        header("Location:/habilidades");

    }

    /*Botao dos dados de especializacoes*/
    public static function especialidadessave()
    {
        include_once 'Model/EspecialidadesModel.php';
        $modelespecialobj = new EspecialidadesModel();
        $habilidades = $_POST['habilidades'];
        $primeirodado = $_POST['primeirodado'];
        $segundodado = $_POST['segundodado'];
        $terceirodado = $_POST['terceirodado'];
        $quartodado = $_POST['quartodado'];
        $quintodado = $_POST['quintodado'];
        $sextodado = $_POST['sextodado'];
        $setimodado = $_POST['setimodado'];
        $oitavodado = $_POST['oitavodado'];
        $nonodado = $_POST['nonodado'];

        $modelespecialobj ->updateDados($habilidades,$primeirodado,$segundodado,$terceirodado,$quartodado,$quintodado,$sextodado,$setimodado,$oitavodado,$nonodado);

        
        
        include_once 'View/modules/fichaemcima/FormEspecialSave.php';
        header("Location:/habilidades");
    }


    /*Botao do Perfil */
    public static function save()
    {
        include_once 'Model/FichaModel.php';
        $model = new FichaModel();
        $model -> nome = $_POST['nome'];
        $model -> idade = $_POST['idade'];
        $model -> jogador = $_POST['jogador'];
        $model -> casa = $_POST['casa'];
        $model -> sexo = $_POST['sexo'];

        
        $model -> save();
       

        header("Location: /form");
    }

    /*Botao da Habilidade*/
    public static function saveHabilidade()
    {
        include 'Model/HabilidadesModel.php';
        $model = new HabilidadesModel();
        $model -> agilidade = $_POST['agilidade'];
        $model ->astucia = $_POST['astucia'];
        $model -> atletismo = $_POST['atletismo'];
        $model ->conhecimento = $_POST['conhecimento'];
        $model -> cura = $_POST['cura'];
        $model ->enganacao = $_POST['enganacao'];
        $model ->estatus= $_POST['status'];
        $model ->furtividade = $_POST['furtividade'];
        $model ->guerra = $_POST['guerra'];
        $model ->idioma = $_POST['idioma'];
        $model ->ladinagem = $_POST['ladinagem'];
        $model ->lidar = $_POST['lidar'];
        $model ->luta = $_POST['luta'];
        $model ->percepcao = $_POST['percepcao'];
        $model ->persuasao = $_POST['persuasao'];
        $model ->pontaria = $_POST['pontaria'];
        $model -> sobrevivencia = $_POST['sobrevivencia'];
        $model ->vigor = $_POST['vigor'];
        $model ->vontade= $_POST['vontade'];

        $model ->save();

        header("Location: /habilidades");
    }

    /*Exibe as Armas e Equipamentos*/
    public static function equipamentos()
    {
        include_once 'Model/EquipamentosModel.php';
        $model = new EquipamentosModel();
        $exibeArmadura = $model ->exibeArmadura();
        $valor = 0;
        foreach($exibeArmadura as $item)
        {
            $valor = $valor + $item -> valor;
        }
        $exibeDinheiro = $model ->selectDinheiro();

        $model -> armaduras = [
            "Roupas" =>["volume"=> 0, "penalidade" => 0 , "nome"=> "Roupas", "preço" => 0, "valor" => 0],

            "Robes ou hab" =>["volume"=> 1, "penalidade" => 0 , "nome"=> "Robes ou Hab", "preço" => 3, "valor" => 1],

            "Placa Peito" =>["volume"=> 3, "penalidade" => -2 , "nome"=> "Placa de Peito", "preço" => 400, "valor" => 5],

            "Placas"=> ["volume"=> 3, "penalidade" => -6 , "nome"=> "Placas", "preço" => 3000, "valor" => 10],

            "Brigatina"=> ["volume"=> 3, "penalidade" => -4 , "nome"=> "Brigatina", "preço" => 1200, "valor" => 8],

            "Talas"=> ["volume"=> 3, "penalidade" => -3 , "nome"=> "Talas", "preço" => 1000, "valor" => 7],

            "Pele"=> ["volume"=> 3, "penalidade" => -3 , "nome"=> "Pele", "preço" => 400, "valor" => 5],

            "Cota Escama"=> ["volume"=> 2, "penalidade" => -3 , "nome"=> "Cota de Escama", "preço" => 600, "valor" => 6],

            "Cota Malha"=> ["volume"=> 2, "penalidade" => -3 , "nome"=> "Cota de Malha", "preço" => 800, "valor" => 5],

            "Alcochoada"=> ["volume"=> 0, "penalidade" => 0 , "nome"=> "Alcochoada", "preço" => 200, "valor" => 1],

            "Couro Macio"=> ["volume"=> 0, "penalidade" => -1 , "nome"=> "Couro Macio", "preço" => 300, "valor" => 2],

            "Couro Rigido"=> ["volume"=> 0, "penalidade" => -2 , "nome"=> "Couro Rigido", "preço" => 300, "valor" => 3],

            "Osso ou Madeira"=> ["volume"=> 1, "penalidade" => -3 , "nome"=> "Osso ou Madeira", "preço" => 300, "valor" => 4],

            "Meia Armadura"=> ["volume"=> 3, "penalidade" => -5 , "nome"=> "Meia Armadura", "preço" => 2000, "valor" => 9],

            "Cota Aneis"=> ["volume"=> 1, "penalidade" => -2 , "nome"=> "Cota de Aneis", "preço" => 600, "valor" => 4]
        ];

     
        $model -> armasContusao = [
            "Bola com corrente"=>
            ["nomeA"=> "Bola com corrente", "peso" => 4, "preco" => 40, "treinamento" => 1, "dano" => "atletismo", "qualidade" => "estilhacadora" . 1 . "poderosa"],

            "Cajado" => ["nomeA" => "Cajado", "peso" => 2, "preco" => "-", "treinamento" => "-", "dano" => "atletismo", "qualidade"=> "Duas Maos". ","."Rápida"], 

            "Porrete/Bordao"=> ["nomeA" => "Porrete/Bordao"], 

            "Maça" => ["nomeA" => "Maça"], 

            "Mangual" => ["nomeA" => "Mangual"],

            "Mangual com Cravos" => ["nomeA" => "Mangual com Cravos"],

            "Marreta" => ["nomeA" => "Marreta"],

            "Martelo de Guerra" => ["nomeA" => "Martelo de Guerra"],
        ];

        $model -> armasHaste = [
            "Alabarda" => ["nomeA" => "Alabarda"],

            "Ferramenta de Aldea" => ["nomeA" => "Ferramenta de Aldea"],

            "Machado de Haste" => ["nomeA" => "Machado de Haste"],
        ];

        $model -> armasBriga = [
            "Chicote" => ["nomeA" => "Chicote"], 
            "Faca" => ["nomeA" => "Faca"]
        ];

        $model -> armasEscudos = [
            "Broquel" => ["nomeA" => "Broquel"],
            "Escudo" => ["nomeA" => "Escudo"], 
            "Escudo de Corpo"=> ["nomeA" => "Escudo de Corpo"], 
            "Escudo Grande"=> ["nomeA" => "Escudo Grande"]
        ];

        $model -> armasEsgrima = [
            "Adaga Mão Esquerda" => ["nomeA" => "Adaga Mão Esquerda"],
            "Espada Pequena" => ["nomeA" => "Espada Pequena"],
            "Lamina de Bravos" => ["nomeA" => "Lamina de Bravos"]
        ];

        $model -> armasCurtas = [
            "Adaga" => ["nomeA" => "Adaga"],
            "Estilhete" => ["nomeA" => "Estilhete"],
            "Punhal"=> ["nomeA" => "Punhal"]
        ];

       $model -> armasLongas = [
        "Arakh"=> ["nomeA"=> "Arakh"],
        "Espada Bastarda"=> ["nomeA"=> "Espada Bastarda"]
       ];

        include_once 'View/modules/fichaemcima/FormEquipamentos.php';
    } 

    /*Compra Armas e Armaduras*/
    public static function equipamentosinsert()
    {
        include_once 'Model/EquipamentosModel.php';
        $model = new EquipamentosModel();
        $array = [];
        $array[] = $_POST['armadura'];
        $array[] = $_POST['valor'];
       

        $model -> insert($array);
        header("Location: /equipamentos");
    }

    /*Vende Armas e Armaduras*/
    public static function equipamentosdelete()
    {
        include_once 'Model/EquipamentosModel.php';
        $model = new EquipamentosModel();
        $id = $_POST['identificador'];

        $model -> delete($id);
        header("Location: /equipamentos");

    }

    /*Altera seu Dinheiro através da Venda e Compra
    de Armas e Armaduras*/
    public static function updateDinheiro()
    {
        include_once 'Model/EquipamentosModel.php';
        $model = new EquipamentosModel();
        $valor = $_POST['dinheiro'];
        $model -> updateDinheiro($valor);
        header("Location: /equipamentos");
    }

   

   
    /*Exibe Calculadora e Conversor além de realizar suas operações*/
    public static function selectCalculadora()
    {

        include_once "Model/CalculadoraModel.php";
        $model = new CalculadoraModel;
        ini_set('display_errors', 0 );
        error_reporting(0);
        $tabelaum = [];
        $tabeladois;
        $texto = floatval($_POST['texto']);
        $array = $model -> selectCalculadora();
        foreach ($array as $item)
        {
            $tabelaum = $item -> dinheiro;
        }
        $arraydois = $model -> selectCalculadoraDois();
        foreach ($arraydois as $item)
        {
            $tabeladois = $item -> dinheiro;
        }
        $primeirovalor = floatval($_POST['um']);
        $segundovalor = floatval($_POST['dois']);
        $valorConvertido = 0;
        $valorIgual = null;
        $resultado;
        $operacao = $_POST['operacao'];

        $listaDeMoedas= [
            'dragao de ouro' => [
                'gamo' => 210, 'lua' => 30, 'vintem' => 11760, 'estrela' => 1470, 'tostao' => 2940, 'meio vintem' => 23520, 'meio tostao' => 5880 ,'dragao de ouro' => 0, 'peso' => 8
            ],

            'gamo' => [
                'gamo' => 0, 'lua' => 7, 'vintem' => 56, 'estrela'=> 7, 'tostao'=> 14, 'meio vintem'=> 112, 
                'meio tostao'=> 28 ,'dragao de ouro' => 210, 'peso' => 6
            ],

            'lua' => [
                'gamo' => 7, 'lua' => 0, 'vintem' => 392, 'estrela'=> 49, 'tostao'=> 98, 'meio vintem' => 784, 
                'meio tostao' ,'dragao de ouro'=> 30, 'peso' => 7
            ], 

            'vintem' => [
                'gamo' => 56, 'lua' => 392, 'vintem' => 0, 'estrela'=> 8, 'tostao'=> 4, 'meio vintem'=> 2, 
                'meio tostao' => 8 ,'dragao de ouro' => 11760, 'peso' => 2
            ], 

            'estrela'=> [
                'gamo' => 7, 'lua' => 49, 'vintem' => 8, 'estrela' => 0, 'tostao'=> 2, 'meio vintem'=> 16, 
                'meio tostao'=> 4 ,'dragao de ouro'=> 1470, 'peso'=> 5 
            ], 
            
            'tostao'=> [
                'gamo' => 14, 'lua' => 98, 'vintem' => 4, 'estrela'=> 2, 'tostao'=> 0, 'meio vintem'=> 8, 
                'meio tostao'=> 2 ,'dragao de ouro' => 2940, 'peso' => 4
            ], 
            
            'meio vintem'=> [
                'gamo' => 112, 'lua' => 784, 'vintem' => 2, 'estrela'=> 16, 'tostao'=> 8, 'meio vintem' => 0, 
                'meio tostao'=> 4 ,'dragao de ouro' => 23520, 'peso'=> 1
            ], 
                
            
            'meio tostao'=> [
                'gamo' => 28, 'lua' => 196, 'vintem' => 8, 'estrela'=> 4, 'tostao'=> 2,'meio vintem'=> 4, 
                'meio tostao'=> 0 ,'dragao de ouro'=> 5880, 'peso' => 3
                ]  
        ];

        $idDeMoeda = [
            'gamo' => 0, 'lua' => 1, 'vintem' => 2, 'estrela' => 3, 'tostao' => 4, 'meio vintem' => 5, 'meio tostao' => 6 ,'dragao de ouro' => 7
        ];

        

       $id = $idDeMoeda[$tabeladois];

        foreach($listaDeMoedas[$tabelaum] as $item)
        {
            $valor [] = $item;
        }

        foreach($listaDeMoedas[$tabeladois] as $item)
        {
            $valorDois [] = $item;
        }

        if($valor[8] < $valorDois[8])
        {
            $vaiTroca = 'troca';
        }

        /*Codigo do Conversor, aqui tem a logica para realizar a conversao do input*/
        if($valor[8]> $valorDois[8])
        {
            $texto = $texto * $valor[$id];
        }else{
            if ($valor[8] < $valorDois[8])
            {
                if ($texto % $valor[$id] > 0)
                {
                    $numeroDecimal = 1;
                    $valorComDecimal = $texto / $valor[$id];
                    $valorInteiroConversor = intval($valorComDecimal);
                    $decimalConversor = $valorComDecimal - $valorInteiroConversor;
                    $texto = $valorInteiroConversor;
                    $decimalConversor = $decimalConversor * $valor[$id];
                    if($decimalConversor - intval($decimalConversor) > 0 and $decimalConversor - intval($decimalConversor) < 1)
                    {
                        if($decimalConversor - intval($decimalConversor)> 0.5)
                        {
                            ceil($decimalConversor);
                        }else{
                            floor($decimalConversor);
                        }
                    }
                    
                }else{
                    $texto = $texto / $valor[$id];
                }
            }else{
                $texto = $texto * 1;
            }
        }

        
        

        /*Lógica da Calculadora*/
        if($tabelaum == $tabeladois)
        {
            /*Codigo da Calculadora, aqui tem a logica para realizar a conversao dos inputs
            quando as duas tabelas tiverem os mesmos valores*/
            switch($operacao)
            {
                case $operacao == 'somar':
                    $troca = 0;
                    $confirmacao = 0;
                    $menorValor = 0;
                    $totalInteiro = $primeirovalor + $segundovalor;
                break;
                
                case $operacao == 'diminuir':
                    $troca = 0;
                    $confirmacao = 0;
                    $menorValor = 0;
                    $totalInteiro = $primeirovalor - $segundovalor;
                    break;
                default;
            }
        }else{

            
            if($vaiTroca == 'troca')
            {
                $a = $primeirovalor;
                $b = $segundovalor;
                $primeirovalor = $b;
                $segundovalor = $a;
                $troca =1;
            }
            if($segundovalor < $valor[$id])
                {
                 $menorValor = 1;
                 $segundovalor = $segundovalor / $valor[$id];
                 if($operacao == 'diminuir')
                 {
                     
                    
                   
                     $resultadoTemporario = $primeirovalor - $segundovalor;
                     $decimal = $resultadoTemporario - intval($resultadoTemporario);
                     $valorInteiro = intval($resultadoTemporario);
                     $valorFinal = $decimal * $valor[$id];
                     if ($valorFinal < 1)
                     {
                        $valorFinal = 1;
                     }else{
                        if ($valorFinal - intval($valorFinal) > 0.5 and $valorFinal - intval($valorFinal) < 1)
                            {
                                $valorFinal = ceil($valorFinal);
                            }else{
                                if($valorFinal - intval($valorFinal)< 0.5)
                                {
                                    $valorFinal = floor($valorFinal);
                                }
                            }
                    }
                     
                 }else{
                    if($operacao == 'somar')
                    {
                        $valorInteiro = $primeirovalor;
                        $valorFinal = $segundovalor * $valor[$id];
                    }
                 }
                }else{
                 if($segundovalor % $valor[$id] > 0)
                 {
                    $troca = 0;
                    $confirmacao  = 1;
                    $menorValor = 0;
                    $valorTemporario = $primeirovalor * $valor[$id];
                    if($operacao == 'diminuir')
                    {
                        if($vaiTroca == 'troca')
                        {
                            $troca = 1;
                        }
                       $totalTemporario = $valorTemporario - $segundovalor;
                       $totalTemporario = $totalTemporario / $valor[$id];
                       $decimal = $totalTemporario - intval($totalTemporario);
                       $totalInteiro = intval($totalTemporario);
                       $decimal = $decimal * $valor[$id];
                       if ($decimal - intval($decimal) > 0.5 and $decimal - intval($decimal) < 1)
                       {
                           $decimal = ceil($decimal);
                       }else{
                           if($decimal - intval($decimal)< 0.5)
                           {
                               $decimal = floor($decimal);
                           }
                       }
                    }else{
                        if ($operacao == 'somar'){
                            if($vaiTroca == 'troca')
                            {
                                $troca = 1;
                            }
                            $primeiroValorTempo = $primeirovalor * $valor[$id];
                            $resultado = $primeiroValorTempo + $segundovalor;
                            $resultado = $resultado / $valor[$id];
                            $totalInteiro = intval($resultado);
                            $decimal = $resultado - $totalInteiro;
                            $decimal = $decimal * $valor[$id];
                        }
                        if ($decimal - intval($decimal) > 0.5 and $decimal - intval($decimal) < 1)
                            {
                                $decimal = ceil($decimal);
                            }else{
                                if($decimal - intval($decimal)< 0.5)
                                {
                                    $decimal = floor($decimal);
                                }
                            }
                    }
                 }else{
                     if($segundovalor % $valor[$id] == 0)
                     {
                        if($operacao == 'somar')
                        {
                            if($vaiTroca == 'troca')
                            {
                                $troca = 1;
                            }

                            $confirmacao = null;
                            $menorValor = 0;
                           
                            $segundovalor = $segundovalor / $valor[$id];
                            $totalInteiro = $primeirovalor + $segundovalor;
                        }
                        else{
                            if ($operacao == 'diminuir')
                            {
                                if($vaiTroca == 'troca')
                                {
                                    $troca = 1;
                                }
                            
                                $confirmacao = null;
                                $menorValor = 0;
                                $segundovalor = $segundovalor / $valor[$id];
                                $totalInteiro = $primeirovalor - $segundovalor;
                                
                            }
                        }
                        
                     }
                 }
                }}


        

       
        include_once "View/modules/fichaemcima/CalculadoraForm.php";
    }

    /*Edita a primeira tabela que vai ser utilizada nos calculas da Calculadora e Conversor*/
    public static function updateCalculadora()
    {
        include_once "Model/CalculadoraModel.php";
        $model = new CalculadoraModel;
        $dinheiro = $_POST['tabelaum'];
        $model -> calculadora($dinheiro);
        header("Location: /calculadora");

    }

    /*Edita a segunda tabela que vai ser utilizada nos calculas da Calculadora e Conversor*/
    public static function updateCalculadoraDois()
    {
        include_once "Model/CalculadoraModel.php";
        $model = new CalculadoraModel;
        $dinheiro = $_POST['tabeladois'];
        $model -> calculadoradois($dinheiro);
        header("Location: /calculadora");

    }

    
}