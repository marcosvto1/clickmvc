
<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title><?php print $titulo;?></title>

<link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<script src="assets/js/jquery-2.1.3.min.js"></script>

<link href="assets/css/site.css" rel="stylesheet">

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
            <li role="presentation" ><a href="#">Home</a></li>
            <li role="presentation"><a href="suporte">Documentação</a></li>
            <li role="presentation"class="active"><a href="sobre">Sobre</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Framework ClickMvc</h3>
      </div>
sdsds

        <h1>Sobre Framework ClickMvsc</h1>


      <div class="row marketing">
        <div class="col-lg-12">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
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