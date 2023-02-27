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

<style>
  
</style>
<body class="bg-dark">

<!- Navegação ->
    <nav class="navbar fixed-top navbar-light bg-light d-flex justify-content-center">
        <form class="navbar-brand" style="margin-bottom:40px ;" method="POST" action="/equipamentos/dinheiro">
        <h3>Dinheiro</h3>
        <input style="height: 50px;" class="text-center" name="dinheiro" value="<?php foreach($exibeDinheiro as $item){echo $item->valor - $valor;}?>" type="text">
        <button class="btn btn-primary" style="margin-right: 20px;">Editar</button>
        <a class="btn btn-secondary" href="/">Voltar</a>
        <a class="btn btn-secondary" href="/calculadora">Calculadora</a>
        </form>
    </nav>

    <!- Exibição de Armaduras compradas ->
    <div class="bg-light rounded" style="display:block; width: 30%; margin-top: 170px; margin-left: 10px;">
    <h2 style="margin-left: 10px;">Armaduras</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($exibeArmadura as $item)
                    { ?>
                <th class="text-uppercase" scope="row">
                   
                        <?php $str = $item -> nome.PHP_EOL;
                        echo nl2br($str);
                    ?><form method="POST" action="/equipamentos/delete"><input name="identificador" type="hidden" value="<?php echo $item -> id;?>"><td><button class="btn btn-primary">Vender</button></td><tr></tr><?php }?></form>
                </th>
        </tbody>
    </table>

    <!- Exibição de Armas compradas ->
    <h2 style="margin-left: 10px;">Armas</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($exibeArmadura as $item)
                    { ?>
                <th class="text-uppercase" scope="row">
                   
                        <?php $str = $item -> nome.PHP_EOL;
                        echo nl2br($str);
                    ?><form method="POST" action="/equipamentos/delete"><input name="identificador" type="hidden" value="<?php echo $item -> id;?>"><td><button class="btn btn-primary">Vender</button></td><tr></tr><?php }?></form>
                </th>
        </tbody>
    </table>
    </div>

    
    <!- Container com as Tabelas -> 
<div style="margin-top: 100px;" class="container">
  <div class="row">

  <!- Tabela de Armaduras->
    <div class="col">
      <table class="table table-borderless table-secondary rounded"><thead class="bg-warning">
        <tr>
          <th scope="col">Armadura</th>
          <th scope="col">Preço</th>
          <th scope="col">Penalidade</th>
          <th scope="col">Volume</th>
          <th scope="col">Valor</th>
          <th scope ="col"></th>
          <th scope ="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($model -> armaduras as $item){?>
          <tr>
            <th scope="row">
              <form method="POST" action="/equipamentos/insert">
                <input value="<?php echo $item['nome']; ?>" type="hidden" name="armadura" id="armadura"> <label><?php echo $item['nome']; ?></label>
                
                <input value="<?php echo $item['preço'];?>" type="hidden" name="valor" id="valor">
                
                <td class="text-center"><?php echo $item['preço'];?></td>
                <td class="text-center"><?php echo $item['penalidade'];?></td>
                <td class="text-center"><?php echo $item['volume'];?></td>
                <td class="text-center"><?php echo $item['valor'];?></td>
                <td><button class="btn btn-primary">Comprar</button></td>
              </form>
            </th>
          </tr>
        <?php }?>

      </tbody>
    </table>
  </div>

</div>
</body>
</html>