
<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Instalação Framework</title>

<link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<script src="assets/js/jquery-2.1.3.min.js"></script>

<link href="../assets/css/site.css" rel="stylesheet">

<style type="text/css">

.jumbotron label {
    font-size:12px;
}

.reg-icon{
    color:#5bc0de;
    font-weight:bold;
    text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.4) !important;
}

.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
    color: #fff;
    background-color: #5bc0de;
}

.prj-name{
    font-weight:bold;
    color:#5bc0de;
}


</style>

</head>

<body>

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container">
      <div class="header clearfix">
      
        <h3 class="text-muted">Instalação</h3>
      </div>

      <div class="jumbotron">
        <h1>Framework ClickMvc</h1>
        <p class="lead">CLICKMVC e um framework mvc desenvolvido pela Click Solução em Tecnologia.</p>

      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <h4>1° Configurar Banco de dados </h4>
          <p>
            <ul>
                 <li>Preecha os campos do arquivo <b>lib/config.inc.php</b> de acordo com suas configurações.</li>
                 <li>
                   <b>Exemplo</b> : 
                   <br/> <span>define('DB_NAME', 'Coloque aqui o nome do banco de dados');</span>
                    <br/> <span>define('DB_HOST', 'Coloque aqui o host do banco de dados');</span>
                     <br/> <span>define('DB_USER', 'Coloque aqui o usuario do banco de dados');</span>
                     <br/> <span>define('DB_PASS', 'Coloque aqui a senha do banco de dadso');</span>


                 </li>
                <li>Renomeia o arquivo <b>lib/config.inc.php</b> para <b>lib/config.php</b></li>
            </ul>
          </p>

          <h4>2° Configurar a Aplicação </h4>
          <p>
            <ul>
                 <li>Preecha os campos do arquivo <b>core/config.php</b> de acordo com suas configurações.</li>
                 <li>
                   <b>Exemplo</b> : 
                   <br/> <span>  define('HOME_NAME', 'Coloque aqui o nome da pasta onde esta aplicação');</span>
                    <br/> <span>define('HOME_PAGE', 'Coloque o nome da pagina incial a ser aberta..');</span>


                 </li>
               
            </ul>
          </p>


        </div>
      </div>

      <footer class="footer">
        <p>&copy; Company Click Solution Tecnologic 2015</p>
      </footer>

    </div> <!-- /container -->



<!-- jQuery -->
<script src="assets/js/jquery-2.1.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>



<script>

 // Dialog message
 $('#btn-dialog-message').click(function () {
  $('#modal-message').dialog('open');
  return false;
 });

 $("#modal-message").dialog({
  autoOpen: false,
  modal: true,
  buttons: {
   Ok: function () {
    $(this).dialog("close");
   }
  }
 });


</script>

</body>

</html>
