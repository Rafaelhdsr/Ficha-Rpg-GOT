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
    <title>Document</title>
</head>
<body class="bg-dark">
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1 text-uppercase"><?php if($model -> habilidades == 'estatus'){echo "Status";}else{echo $model -> habilidades;} ?></span>
        <span style="margin-right: 70px;" class="navbar-brand mb-0 h1 text-uppercase"> Os seus pontos Para distribuir são: <?php foreach($novamodel -> pontosespecial as $item){echo $item -> pontos;}?></span>
    </nav>

    <form style="width: 70%; margin-top: 20px; margin-left: 10px;" method="POST" action="/habilidades/especializacoes/save">

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">1ª Especialidade</span>
            </div>
            <input class="form-control text-center" type="text" name="especialum" value=" <?php echo $model -> especialum; ?>">
            <input class="form-control text-center" name="primeirodado" type="text" value="<?php foreach($modeloDados as $item){echo $item -> primeirodado;} ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">2ª Especialidade</span>
            </div>
            <input class="form-control text-center" type="text" name="especialdois" value=" <?php echo $model -> especialdois; ?>">
            <input class="form-control text-center" name="segundodado" type="text" value="<?php foreach($modeloDados as $item){echo $item -> segundodado;} ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">3ª Especialidade</span>
            </div>
            <input class="form-control text-center" type="text" name="especialtres" value=" <?php echo $model -> especialtres; ?>">
            <input class="form-control text-center" name="terceirodado" type="text" value="<?php foreach($modeloDados as $item){echo $item -> terceirodado;} ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">4ª Especialidade</span>
            </div>
            <input class="form-control text-center" type="text" name="especialquatro" value=" <?php echo $model -> especialquatro; ?>">
            <input class="form-control text-center" name="quartodado" type="text" value="<?php foreach($modeloDados as $item){echo $item -> quartodado;} ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">5ª Especialidade</span>
            </div>
            <input class="form-control text-center" type="text" name="especialcinco" value=" <?php echo $model -> especialcinco; ?>">
            <input class="form-control text-center" name="quintodado" type="text" value="<?php foreach($modeloDados as $item){echo $item -> quintodado;} ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">6ª Especialidade</span>
            </div>
            <input class="form-control text-center" type="text" name="especialseis" value=" <?php echo $model -> especialseis; ?>">
            <input class="form-control text-center" name="sextodado" type="text" value="<?php foreach($modeloDados as $item){echo $item -> sextodado;} ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">7ª Especialidade</span>
            </div>
            <input class="form-control text-center" type="text" name="especialsete" value=" <?php echo $model -> especialsete; ?>">
            <input class="form-control text-center" name="setimodado" type="text" value="<?php foreach($modeloDados as $item){echo $item -> setimodado;} ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">8ª Especialidade</span>
            </div>
            <input class="form-control text-center" type="text" name="especialoito" value=" <?php echo $model -> especialoito; ?>">
            <input class="form-control text-center" name="oitavodado" type="text" value="<?php foreach($modeloDados as $item){echo $item -> oitavodado;} ?>">
        </div>

        <div class="input-group" style="margin-bottom: 10px;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">9ª Especialidade</span>
            </div>
            <input class="form-control text-center" type="text" name="especialnove" value=" <?php echo $model -> especialnove; ?>">
            <input class="form-control text-center" name="nonodado" type="text" value="<?php foreach($modeloDados as $item){echo $item -> nonodado;} ?>">
        </div>
        <input type="hidden" name="habilidades" value="<?php foreach($modeloDados as $item){echo $item -> habilidades;}?>">

        <button  class="btn btn-warning">Enviar</button>
        <a class="btn btn-secondary" style="margin-left: 20px;" href="/habilidades">Voltar</a>
        <a class="btn btn-secondary" style="margin-left: 20px;" href="/">Inicio</a>
    </form>

</body>