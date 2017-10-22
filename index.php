<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title> Umidade do Solo </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">Umidade do Solo</div>
          <div class="panel-body">
            <p>Informações de umidade do solo com Arduino</p>
          </div>

          <!-- Table -->
          <table class="table">
            <thead>
              <th>Ponto</th>
              <th>Umidade do Solo %</th>
              <th>Dia</th>
            </thead>
            <tbody>
              <td></td>
              <td></td>
              <td></td>
            </tbody>
          </table>
          <div class="row">
            <a class="btn btn-primary" href="#">Salvar</a>
            <a class="btn btn-danger" href="#">Cancelar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
