<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
<div class="container">
<?php 
    require "includes/menu.php"; 
    
    session_start();

    if(  isset($_SESSION['logar'] )){
      echo "Bem vindo";
    } else {
      header("location: ../index.php");
      session_destroy();
    }

  
  ?>
  <h1>Novo Usuário</h1>

  <form method="post" action="acao/acaoUsuario.php">

<h3 style="margin-top: 30px; color:gray"></h3>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
    <label style="font-weight: bold;" for="exampleInputEmail1">Nome</label>
    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome">
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-4">
      <div class="form-group">
      <label style="font-weight: bold;" for="exampleInputEmail1">CPF</label>
      <input type="text" name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="000.000.000-00">
      </div>
    </div>

    
    <div class="col-md-6">
      <div class="form-group">
      <label style="font-weight: bold;" for="exampleInputEmail1">Endereço</label>
      <input type="text" name="endereco" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="insira o endereço">
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
      <label style="font-weight: bold;" for="exampleInputEmail1">Nivel</label>
      <select class="form-control" name="nivel" style="margin-top: 5px;">
      <option>---</option>
      <option>---</option>
      <option>---</option>
      </select>
      </div>
    </div>
</div>

  
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label style="font-weight: bold;" for="exampleInputEmail1">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="inserir gmail">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
    <label style="font-weight: bold;" for="exampleInputEmail1">Senha</label>
    <input type="text" name="senha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="inserir senha">
    </div>
  </div>
  <div class="col-md-2">
      <div class="form-group">
      <label style="font-weight: bold;" for="exampleInputEmail1">Status</label>
      <select class="form-control" name="status" style="margin-top: 5px;">
      <option>---</option>
      <option>---</option>
      <option>---</option>
      </select>
      </div>
    </div>
</div>



<input style="float:right;" value="Cancelar" type="button" class="btn btn-outline-secondary">
<input style="float:right; margin-right:10px;" name="enviar" value="Enviar" type="submit" class="btn btn-success">

</form>

  <?php require "includes/rodape.php";?>
</div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html