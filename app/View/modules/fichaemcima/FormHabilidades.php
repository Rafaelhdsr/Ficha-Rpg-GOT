<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--Get your own code at fontawesome.com-->
    <title>Document</title>
</head>


<body class="bg-dark">
  
    <nav class="navbar fixed-top navbar-light bg-light">
        <p class="navbar-brand text-dark">O total de Pontos distribuídos foi de: <h3 style="padding: 5px;" class=" bg-dark text-light border border-dark rounded"> <?php foreach($model -> total as $item){echo $item -> total;}?> </h3></p>
        <p class="navbar-brand text-warning">Os seus pontos Para distribuir são: <h3 style="padding: 5px;" class=" bg-warning text-dark border border-warning rounded"> <?php foreach($model -> pontosHabilidades as $item){$totalpontos =  $item -> idade + $pontosadicionais; echo $totalpontos;}?></h3></p>
        <a href="/" class="badge badge-secondary">Voltar</a>
    </nav>
    
<ul class="list-group" style="width: 50%; margin-top:80px;">

        <form method="POST" action="/habilidades/form">

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div  class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a href="/habilidades/especializacoes?id=<?php echo "agilidade"; ?>" style="text-decoration: none;" class="input-group-text" id="inputGroup-sizing-lg" for="agilidade">Agilidade</a>
                    </div>
                    <input style="margin-right: 20px; outline:0;" class="form-control text-center border-0" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="agilidade" name="agilidade"
                    value="<?php foreach($model -> rows as $item){echo $item -> agilidade;}?>" type="number">
                    <?php if($exibeNotificacao[0] >= 1){
                        ?><i style='font-size:24px' class='fas'>&#xf0f3;</i><?php 
                    } ?>
                </div>
            </li>


            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "atletismo"; ?>" class="input-group-text" id="inputGroup-sizing-lg" for="atletismo">Atletismo</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px; margin-right:20px;" id="atletismo"       value="<?php foreach($model -> rows as $item){echo $item -> atletismo;}?>" name="atletismo" type="number">
                    <?php if($exibeNotificacao[1] >= 1){
                        ?><i style='font-size:24px' class='fas'>&#xf0f3;</i><?php 
                    } ?>
                </div>
            </li>



            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div  class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "vigor";?>" class="input-group-text" id="inputGroup-sizing-lg" for="vigor">Vigor</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px; margin-right:20px;" id="vigor" name="vigor"  value="<?php foreach($model -> rows as $item){echo $item -> vigor;}?>"type="number">
                    <?php if($exibeNotificacao[2] >= 1){
                        ?><i style='font-size:24px' class='fas'>&#xf0f3;</i><?php 
                    } ?>
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "cura";?>" class="input-group-text" id="inputGroup-sizing-lg" for="cura">Cura</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 30px;" id="cura" name="cura"  value="<?php foreach($model -> rows as $item){echo $item -> cura;}?>"type="number">
                    <?php if($exibeNotificacao[3] >= 1){
                        ?><i style='font-size:24px' class='fas'>&#xf0f3;</i><?php 
                    } ?>
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "percepcao";?>" class="input-group-text" id="inputGroup-sizing-lg" for="percepcao">Percepção</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px; margin-right:20px;" id="percepcao" value="<?php foreach($model -> rows as $item){echo $item -> percepcao;}?>" name="percepcao" type="number">
                    <?php if($exibeNotificacao[4] >= 1){
                        ?><i style='font-size:24px' class='fas'>&#xf0f3;</i><?php 
                    } ?>
                    </div>
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "persuasao";?>" class="input-group-text" id="inputGroup-sizing-lg" for="persuasao">Persuasão</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px; margin-right:20px;" id="persuasao" name="persuasao" value="<?php foreach($model -> rows as $item){echo $item -> persuasao;}?>" type="number">
                    <?php if($exibeNotificacao[5] >= 1){
                        ?><i style='font-size:24px' class='fas'>&#xf0f3;</i><?php 
                    } ?>
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "conhecimento";?>" class="input-group-text" id="inputGroup-sizing-lg" for="conhecimento">Conheci</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;" id="conhecimento" name="conhecimento" value="<?php foreach($model -> rows as $item){echo $item -> conhecimento;}?>" type="number">
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "idioma";?>" class="input-group-text" id="inputGroup-sizing-lg" for="idioma">Idioma</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;"id="idioma" name="idioma" value="<?php foreach($model -> rows as $item){echo $item -> idioma;}?>" type="number">
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                    <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "luta";?>" class="input-group-text" id="inputGroup-sizing-lg" for="luta">Luta</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;" id="luta" name="luta"  value="<?php foreach($model -> rows as $item){echo $item -> luta;}?>"type="number">
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "guerra";?>"  class="input-group-text" id="inputGroup-sizing-lg" for="guerra">Guerra</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php foreach($model -> rows as $item){echo $item -> guerra;}?>" style="width: 50px;" id="guerra" name="guerra" type="number">
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                    <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "furtividade";?>"
                      class="input-group-text" id="inputGroup-sizing-lg" for="furtividade">Furtividade</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default"  style="width: 50px;" id="furtividde" name="furtividade" value="<?php foreach($model -> rows as $item){echo $item -> furtividade;}?>" type="number">
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div  class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "ladinagem";?>" class="input-group-text" id="inputGroup-sizing-lg" for="ladinagem">Ladinagem</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default"  style="width: 50px;" id="ladinagem" name="ladinagem" value="<?php foreach($model -> rows as $item){echo $item -> ladinagem;}?>" type="number">
                    </div>
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div  class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "estatus";?>"  class="input-group-text" id="inputGroup-sizing-lg" for="status">Status</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;" id="status" name="status" value="<?php foreach($model -> rows as $item){echo $item -> estatus;}?>" type="number">
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div  class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "lidar";?>"  class="input-group-text" id="inputGroup-sizing-lg"  for="lidar">Lidar C</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;" id="lidar" name="lidar" value="<?php foreach($model -> rows as $item){echo $item -> lidar;}?>" type="number">
                </div>
                
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "astucia";?>"  class="input-group-text" id="inputGroup-sizing-lg" for="astucia">Astucia</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;" id="astucia" name="astucia" value="<?php foreach($model -> rows as $item){echo $item -> astucia;}?>" type="number">
                </div>
                
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "sobrevivencia";?>" class="input-group-text" id="inputGroup-sizing-lg" for="sobrevivencia">Sobrevivê</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;" id="sobrevivencia" name="sobrevivencia" value="<?php foreach($model -> rows as $item){echo $item -> sobrevivencia;}?>" type="number">
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                    <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "vontade";?>"  class="input-group-text" id="inputGroup-sizing-lg" for="vontade">Vontade</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;" id="vontade" name="vontade" value="<?php foreach($model -> rows as $item){echo $item -> vontade;}?>" type="number">
                    </div>
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "pontaria";?>"  class="input-group-text" id="inputGroup-sizing-lg" for="pontaria">Pontaria</a>
                    </div >
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;" id="pontaria" name="pontaria" value="<?php foreach($model -> rows as $item){echo $item -> pontaria;}?>" type="number">
                    </div>
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <a style="text-decoration: none;" href="/habilidades/especializacoes?id=<?php echo "enganacao";?>" class="input-group-text" id="inputGroup-sizing-lg"  for="enganacao">Enganação</a>
                    </div>
                    <input class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 50px;" id="enganacao" name="enganacao" value="<?php foreach($model -> rows as $item){echo $item -> enganacao;}?>" type="number">
                </div>
            </li>
                    <button style="margin-bottom: 10px; margin-top:20px;" class="btn btn-warning btn-lg" type="submit" >Enviar</button>

        </form>
        
</ul>  
</body>
</html>