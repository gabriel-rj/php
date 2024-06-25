
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
  <?php require "includes/menu.php";?>
  <h1>Cadastro Baitola Fornecedor</h1>

<form method="post" action="acao/acaoFornecedor.php">

<div style="margin-top: 50px;" class="row">

  <div class="col-md-1">
    <div class="form-group">
    <label style="font-weight: bold;" for="exampleInputEmail1">Código</label>
    <input class="form-control" type="text" placeholder="32" readonly>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
    <label style="font-weight: bold;"  for="exampleInputEmail1">Nome</label>
    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome">
    </div>
  </div> 
  
  <div class="col-md-4">
    <div class="form-group">
    <label style="font-weight: bold;" for="exampleInputEmail1">E-mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@cliente@dominio.com">
    </div>
  </div>

    <div class="col-md-3">
    <div class="form-group">
    <label style="font-weight: bold;"  for="exampleInputEmail1">CPF</label>
    <input type="text" name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Só números">
    </div>
    </div>

</div>

<div class="row">

  <div class="col-md-2">
    <div class="form-group">
    <label style="font-weight: bold;"  style="font-weight: bold;" for="exampleInputEmail1">N° Celular</label>
    <input type="text" name="celular" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="N do celular">
    </div>
  </div>
  <div class="col-md-2">
  <div class="form-group">
    <label style="font-weight: bold;"  for="exampleInputEmail1">N° Telefone fixo</label>
    <input type="text" name="fixo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="N telefone">
    </div>
  </div>
  <div class="col-md-2">
    <div class="form-group">
    <label style="font-weight: bold;"  for="exampleInputEmail1">CEP</label>
    <input type="text" name="cep" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: 88308070">
    </div>
  </div>
  <div class="col-md-2">
    <div class="form-group">
    <label style="font-weight: bold;"  for="exampleInputEmail1">Logradouro</label>
    <input type="text" name="logradouro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: Rua 1400">
    </div>
  </div>
  <div class="col-md-1">
  <div class="form-group">
    <label style="font-weight: bold;"  for="exampleInputEmail1">N°</label>
    <input type="text" name="n" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="N°">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <label style="font-weight: bold;"  for="exampleInputEmail1">Bairro</label>
    <input type="text" name="bairro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bairro">
    </div>
  </div>

</div>

<div class="row">

  <div class="col-md-4">
    <div class="form-group">
    <label style="font-weight: bold;"  for="exampleInputEmail1">Cidade</label>
    <input type="text" name="cidade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cidade">
    </div>
  </div>
  <div class="col-md-1">
    <div class="form-group">
    <label style="font-weight: bold;"  for="exampleInputEmail1">UF</label>
    <input type="text" name="uf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="UF">
    </div>
  </div>

  <div style="font-weight: bold;" class="col-md-3">Status
    <select class="form-control" name="status" style="margin-top: 5px;">
    <option>Selecione</option>
    <option>solteiro</option>
    <option>casado</option>
    <option>mamando</option>
    </select>
  </div>

</div>
  <input type="submit" value="Próximo" name="enviar" class="btn btn-success" style="float:right;"></button>
  <button type="button" class="btn btn-danger" style="float:right; margin-right:10px;">Resetar</button>


</form>



  <?php require "includes/rodape.php";?>
</div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>



