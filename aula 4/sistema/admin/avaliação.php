
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
  <h1>AVALIAÇÃO</h1>

<form method="post" action="acao/acaoAvaliacao.php">

  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
      <label  style="font-weight: bold;" for="exampleInputEmail1">Razão Social</label>
      <input type="text" name="razao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Razão Social">
      </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;" for="exampleInputEmail1">CNPJ</label>
        <input type="text" name="cnpj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CNPJ">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;"for="exampleInputEmail1">Inscrição Estadual</label>
        <input type="text" name="inscricao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inscrição Estadual">
        </div>
      </div>
      
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;" for="exampleInputEmail1">Logradouro</label>
        <input type="text" name="logradouro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Logradouro">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;"for="exampleInputEmail1">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bairro">
        </div>
      </div>
      
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;" for="exampleInputEmail1">Município</label>
        <input type="text" name="municipio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Município">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;"for="exampleInputEmail1">UF</label>
        <input type="tex" name="uf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="UF">
        </div>
      </div>
      
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;" for="exampleInputEmail1">CEP</label>
        <input type="text" name="cep" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CEP">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;"for="exampleInputEmail1">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
        </div>
      </div>
      
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
      <label  style="font-weight: bold;" for="exampleInputEmail1">Email</label>
      <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
      </div>
    </div>
  </div>

<p>Representante(s) da Empresa para contato</p>
<br>
<p>Representante 1:</p>
<br>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;" for="exampleInputEmail1">Nome</label>
        <input type="text" name="nome2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;"for="exampleInputEmail1">Função</label>
        <input type="text" name="funcao2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Função">
        </div>
      </div>
</div>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;" for="exampleInputEmail1">Telefone</label>
        <input type="text" name="telefone2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;"for="exampleInputEmail1">Email</label>
        <input type="email" name="email2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
      </div>
</div>
<p>Representante 2:</p>
<br>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;" for="exampleInputEmail1">Nome</label>
        <input type="text" name="nome3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;"for="exampleInputEmail1">Função</label>
        <input type="text" name="funcao3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Função">
        </div>
      </div>
</div>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;" for="exampleInputEmail1">Telefone</label>
        <input type="text" name="telefone3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label  style="font-weight: bold;"for="exampleInputEmail1">Email</label>
        <input type="email" name="email3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
      </div>
</div>
<input type="submit" value="Enviar" name="enviar" class="btn btn-dark" style="margin-left: 15px;">

  




  <?php require "includes/rodape.php";?>
</div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>



