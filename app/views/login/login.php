
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php print $titulo;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Latest compiled and minified CSS -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../clickmvc/assets/css/bootstrap.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="/var/www/clickmvc/assets/css/bootstrap-theme.min.css">

	<!--Jquery-->
	<script src="/assets/js/jquery-2.1.3.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="/assets/js/bootstrap.min.js"></script>

	<style type="text/css">


.img-user{
  margin-top: 40px;
}

.jumbotron label {
    font-size:12px;
}

.reg-icon{
    color:#5bc0de;
    font-weight:bold;
}

.nav-pills>li.active>a,
.nav-pills>li.active>a:hover,
.nav-pills>li.active>a:focus {
    color: #fff;
    background-color: #5bc0de;
}

.prj-name{
    font-weight:bold;
    text-shadow: 0 2px 2px #eee;
    color:#5bc0de;
}

.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

.header {
  border-bottom: 1px solid #e5e5e5;
}

.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

.jumbotron {
  text-align: center;
  padding:0px !important;
}

.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}


@media screen and (min-width: 768px) {
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }

  .header {
    margin-bottom: 30px;
  }

  .jumbotron {
    border-bottom: 0;
  }
}

.btn {
 outline:0;
 border:none;
 border-top:none;
 border-bottom:none;
 border-left:none;
 border-right:none;
 box-shadow:inset 2px -3px rgba(0,0,0,0.15);
}
.btn:focus {
 outline:0;
 -webkit-outline:0;
 -moz-outline:0;
}
.form-signin {
  max-width: 280px;
  margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin {
  margin-bottom: 10px;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: none;
  border-left-style: solid;
  border-color: #000;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-top-style: none;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-color: rgb(0,0,0);
  border-top:1px solid rgba(0,0,0,0.08);
}
.form-signin-heading {
  text-align: center;
  text-shadow: 0 2px 2px rgba(0,0,0,0.5);
  color:#5bc0de !important;
}

	</style>

	<link href="/var/www/clickmvc/assets/css/login.css" rel="stylesheet">
</head>
<body style="">

<div class="container">
  <div class="header">
    <ul class="nav nav-pills pull-right">
      <li><a href="#">&nbsp;</a></li>
    </ul>
    <h3 class="text-muted prj-name">Click Mvc</h3>
  </div>

  <div style="height:auto;min-height:300px;" class="jumbotron">
    <div class="col-md-3">

    </div>
    <div class="col-md-6 form-content">
      <form accept-charset="utf-8" method="post" id="UserLoginForm" class="form-signin" action="login/logar">
        <h1 class="form-signin-heading text-muted">Login</h1>
        <input type="text" id="username" name="login" autofocus="autofocus" placeholder="Username" class="form-control" name="username">
        <input type="password" id="password" name="senha" placeholder="Password" class="form-control" name="password">
        <button type="submit" class="btn btn-lg btn-info btn-block">
          <i class="fa fa-share"></i>
          Login
        </button>
      </form>
    </div>
  </div>
</div>
<div class="col-md-12">
  <div class="container">
    <footer class="footer">
      <p>&copy; Company Click Solution Tecnologic 2015</p>
    </footer>
  </div>
</div>

</body>
</html>