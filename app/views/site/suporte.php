
<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title><?php print $titulo;?></title>

<link href="<?php print HOME_NAME;?>/assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<script src="<?php print HOME_NAME;?>/assets/js/jquery-2.1.3.min.js"></script>


<link href="<?php print HOME_NAME;?>/assets/css/site.css" rel="stylesheet">

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
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="<?php print HOME_NAME;?>/home">Home</a></li>
            <li role="presentation" class="active"><a href="<?php print HOME_NAME;?>/suporte">Ducumentação</a></li>
            <li role="presentation"><a href="<?php print HOME_NAME;?>/sobre">Sobre</a></li>
          </ul>
        </nav>
             <h3 class="text-muted">Framework CLICKMVC</h3>
      </div>


 <div class="row">
    <div class="col-sm-12">
      <h1 class="title-lg first-child text-center text-primary"><span>Documentação</span></h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 col-lg-3">
      <h3 class="title-block first-child"></h3>
        <h3 class="title-block">Contato</h3>
      <div class="menu-lg">
        <div class="item">
          <i class="fa fa-users text-primary"></i>
          <div class="content">
            <div class="title"><a href="http://www.clicksoftwares.com.br"><span class="text-red">Online</span> Suporte</a></div>
            <div class="description">
               www.clicksoftwares.com.br
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-sm-8 col-lg-9">
      <h3 class="title-block second-child">Topicos</h3>
      <div class="panel-group" id="faqList">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#faqList" href="#questionOne" class="collapsed">
                  Configurando Framework
              </a>
            </h4>
          </div>
          <div id="questionOne" class="panel-collapse collapse" style="height: 0px;">
            <div class="panel-body">
              <p><h3>1 Passo</h3> Primeiramente entre no site <a href="">Click MVC</a>, Efetue o downloand da aplicação, quando concluido, extraia os arquivo para servidor web local.<br> <h3>2 Passo</h3> Entre no diretorio da aplicação é abre o arquivo config.php. O mesmo pode ser encontro na pasta lib/config.php. Quando aberto, altera dados que corresponde a seu servidor e banco de dados



                   <footer class="footer">
                 <p>&copy; Company Click Solution Tecnologic 2015</p>
                 </footer>
               </p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#faqList" href="#questionTwo" class="collapsed">
                Criando a primeira aplicação
              </a>
            </h4>
          </div>
          <div id="questionTwo" class="panel-collapse collapse" style="height: 0px;">
            <div class="panel-body">
              <p>Donec massa urna, tristique sed lectus quis, suscipit ultricies velit. Curabitur pulvinar rutrum risus eu aliquet. Vestibulum at felis et ipsum lacinia fringilla. Praesent blandit ultricies velit non euismod. Integer fringilla, ipsum eu adipiscing venenatis, nisl nisl fermentum sem, nec suscipit felis arcu in augue. Nunc ac blandit lorem. Maecenas auctor justo odio, at eleifend nulla venenatis quis. Aenean semper, libero ac dictum bibendum, enim augue
               <footer class="footer">
                 <p>&copy; Company Click Solution Tecnologic 2015</p>
                 </footer></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


      <div class="row marketing">
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