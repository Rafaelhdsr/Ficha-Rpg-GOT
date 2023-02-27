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
<body class="bg-dark d-flex justify-content-center align-items-center">


   <form class="card" style="width: 18rem; margin-top: 20px;" method="POST" action="/form/ficha">
   <ul class="list-group list-group-flush">

    <div class="list-group-item">
        <label class="text-warning" for="nome">Nome</label>
        <input style="outline:0;"  class="text-center border-0" id="nome" name="nome" value="<?php foreach($model -> rows as $item){echo $item -> nome;}?>"
        type="text">
    </div>

    <div class="list-group-item">
        <label class="text-warning" for="idade">Idade</label>
        <input  style="outline:0;" class="text-center border-0" id="idade" name="idade" value="<?php foreach($model -> rows as $item){echo $item -> idade;}?>"  type="text">
    </div>

    <div class="list-group-item">
        <label class="text-warning" for="jogador">Player</label>
        <input  style="outline:0;" class="text-center border-0" id="jogador" name="jogador" value="<?php foreach($model -> rows as $item){echo $item -> jogador;}?>"  type="text">
    </div>

    <div class="list-group-item">
        <label class="text-warning" for="casa">Casa</label>&nbsp;&nbsp;&nbsp;
        <input style="outline:0;"  class="text-center border-0" id="casa" name="casa" value="<?php foreach($model -> rows as $item){echo $item -> casa;}?>"  type="text">
    </div>
   
    <div class="list-group-item">
        <label class="text-warning" for="sexo">Sexo</label>&nbsp;&nbsp;&nbsp;
        <input style="outline:0;" class="text-center border-0" id="sexo" name="sexo" value="<?php foreach($model -> rows as $item){echo $item -> sexo;}?>"  type="text">
    </div>
    
    <div  class="list-group-item d-flex justify-content-center">
        <button class="btn btn-warning btn-sm" style="width: 40%;" type="submit" >Atualizar</button>
        <a style="margin-left: 30px;" href="/" class="btn btn-secondary btn-sm">Voltar</a>
    </div>
   </ul>
    </form>
    
</body>
</html>