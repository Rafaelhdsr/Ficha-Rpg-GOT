<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="bg-light" style="margin-left: 15px;">
<div class="d-flex justify-content-around">
    <div>
        
<h1 class="">Conversor</h1>

<div class="d-flex flex-row">
<h6>Converter de <p class="text-success"><?php echo strtoupper($tabelaum);?></p> para <p class="text-info"><?php echo strtoupper($tabeladois);?></p></h6>
</div>

<form method="POST" action="/calculadora">
    <input  style="width: 66%; outline:0;" class="text-center text-center border-0 bg-light" type="text" name="texto" value="<?php if($numeroDecimal == 1){echo $texto . " " . $tabeladois . " " . $decimalConversor . " " . $tabelaum;}else{echo $texto;} ?>">
    <button class="btn btn-primary">converter</button>
</form>


<div style="width: 25%; margin-top: 10px;" class="d-flex justify-content-between">
<form method="POST" action="/tabelaum" >
    <div class="btn-group dropright">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inicio

        </button>
        <div style="padding: 20px;" class="dropdown-menu text-center">
            <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="gamo" name="tabelaum">
            <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="estrela" name="tabelaum">
            <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="tostao" name="tabelaum">
            <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="vintem" name="tabelaum">
            <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="meio vintem" name="tabelaum">
            <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="meio tostao" name="tabelaum">
            <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="dragao de ouro" name="tabelaum">
            <input class="btn btn-primary" type="submit" value="lua" name="tabelaum">
        </div>
    </div>
</form>

<form  method="POST" action="/tabeladois">
<div class="btn-group dropright" style=" margin-left: 20px;">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Final

    </button>
    <div style="padding: 20px;" class="dropdown-menu text-center">
        <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="gamo" name="tabeladois">
        <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="estrela" name="tabeladois">
        <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="tostao" name="tabeladois">
        <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="vintem" name="tabeladois">
        <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="meio vintem" name="tabeladois">
        <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="meio tostao" name="tabeladois">
        <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="dragao de ouro" name="tabeladois">
        <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="lua" name="tabeladois">
    </div>
</div>

</form>


</div>
<a style="margin-top: 10px;" class="btn btn-secondary" href="/equipamentos">voltar</a>
    </div>

    <div>
   

        <h1>Calculadora</h1>
        <form method="POST" action="/calculadora">

            <input type="text" style="outline:0; padding: 10px;" class="text-center text-center border-0 bg-light" name="um">
            
            <input style="width: 90px;" class="text-center" type="text"  value="<?php if(isset($_POST['resultado'])){echo "operação";} if ($_POST == null){echo "operação";}else{echo $_POST['operacoes'];}?>" disabled>
            
            <input class="btn btn-primary" name="operacao" style="width: 90px;" type="hidden" value="<?php echo $_POST['operacoes'] ?>">
            <input style=" outline:0; padding: 10px;" type="text" name="dois" class="text-center text-center border-0 bg-light">
            
            <button  name="resultado" class="btn btn-primary">Calcular</button>
        </form>

        
        <?php 
        /* Função criada para melhorar a organização do código na hora de exibir valores do cálculo da
        calculadora e se for necessário edita-los */
        function exibeCalculo($menorValor, $troca, $tabelaum, $tabeladois,$confirmacao,$totalInteiro,$valorInteiro,$valorFinal,$decimal)
        {
            /* Quando o valor do primeiro input for menor que o valor de conversão e não for necessário 
            trocar os valores dos inputs*/ 
            if($menorValor == 1 and $troca == null)
            {
                return $valorInteiro . " " . $tabelaum . " ". " e". " " . $valorFinal . " " . $tabeladois;
            } else { 

                /* Quando o valor do primeiro input for menor que o valor de conversão e for necessário trocar os valores dos inputs*/
                if ($menorValor == 1 and $troca == 1) 
                {
                    return $valorInteiro . " " . $tabeladois . " ". " e". " " . $valorFinal . " " . $tabelaum;
                }
            }
            
            /* Quando o valor do primeiro input não for menor que o valor de conversão, quando houver uma confirmação de que há valores decimais e for necessário  trocar os valores dos inputs*/
            if($confirmacao == 1 and $troca == 1 and $menorValor == 0)
            {
                return $totalInteiro . " " . $tabeladois . " " . "e". " " . $decimal
            . " " . $tabelaum;
            }else{
                
                 /* Quando o valor do primeiro input não for menor que o valor de conversão, quando não houver uma confirmação de que há valores decimais e for necessário  trocar os valores dos inputs*/
                if($confirmacao == null and $troca == 1 and $menorValor == 0)
                {
                    return $totalInteiro . " " . $tabeladois;
                }else{
                    
                     /* Quando o valor do primeiro input não for menor que o valor de conversão, quando houver uma confirmação de que há valores decimais e não for necessário  trocar os valores dos inputs*/
                    if($confirmacao == 1 and $troca == 0 and $menorValor == 0)
                    {
                        return $totalInteiro . " " . $tabelaum . " " . "e". " " . $decimal . " " . $tabeladois;
                    }else{
                        
                         /* Quando não houver uma confirmação de que há valores decimais e não for necessário  trocar os valores dos inputs*/
                        if($confirmacao == 0 or $confirmacao == null and $troca == 0 or $troca == null )
                        {
                             /* Quando o valor não for menor que o valor deconversão*/
                            if($menorValor == 0 or $menorValor == null)
                            {
                                return $totalInteiro . " " . $tabelaum;
                            }
                        }
                    }
                }
            }
        }?> 
        <?php
        if(isset($_POST['resultado']))
        {
            ?><div style="margin-top: 10px;" class="row text-center text-primary">
            <div class="col">
              <div id="multiCollapseExample1">
                <div class="card card-body">
                  <?php  echo exibeCalculo($menorValor, $troca, $tabelaum, $tabeladois,$confirmacao,$totalInteiro,$valorInteiro,$valorFinal,$decimal);?>
                </div>
              </div>
            </div>
          </div><?php }?>

          
        
          <div style="width: 25%; margin-top: 40px;" class="d-flex justify-content-between">
        <form method="POST" action="/tabelaum" >
            <div class="btn-group dropright">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inicio

                </button>
                <div style="padding: 20px;" class="dropdown-menu text-center">
                <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="gamo" name="tabelaum">
                <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="estrela" name="tabelaum">
                <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="tostao" name="tabelaum">
                <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="vintem" name="tabelaum">
                <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="meio vintem" name="tabelaum">
                <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="meio tostao" name="tabelaum">
                <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="dragao de ouro" name="tabelaum">
                <input class="btn btn-primary" type="submit" value="lua" name="tabelaum">
            </div>
        </div>
    </form>
    <form  method="POST" action="/tabeladois">
        <div class="btn-group dropright" style=" margin-left: 20px;">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Final

        </button>
        <div style="padding: 20px;" class="dropdown-menu text-center">
          <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="gamo" name="tabeladois">
          <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="estrela" name="tabeladois">
          <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="tostao" name="tabeladois">
          <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="vintem" name="tabeladois">
          <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="meio vintem" name="tabeladois">
          <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="meio tostao" name="tabeladois">
          <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="dragao de ouro" name="tabeladois">
          <input style="margin-bottom: 10px;" class="btn btn-primary" type="submit" value="lua" name="tabeladois">
        </div>
    </form>
</div>
<form method="POST" action="/calculadora" class="dropdown">
        <button style="margin-left: 10px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Operações</button>
        
        <div style="padding: 5px;" class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
            <input class="btn btn-primary" style="display: block; margin-bottom: 10px;" type="submit" value="somar" name="operacoes">
            <input class="btn btn-primary" style="display: block;"  type="submit" value="diminuir" name="operacoes">
        </div>
    </form>
</div>


    
</body>
</html>