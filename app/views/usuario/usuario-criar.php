<?php include 'lib/autentica.php'; ?>

<?php

$user="";
foreach($this->model->findAll() as $key => $value){

   $user = $value->username;

}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("views/template/head_scripts.php"); ?>


</head>

<body>



<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        <!-- menu topo -->

        <?php include("views/template/barra_menu_topo.php") ?>

        <!-- /menu topo -->

        <!-- Menu lateral -->
        <?php include("views/template/menu_lateral.php") ?>
        <!-- fim menu lateral -->

    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Usuarios</h1>
            </div>
        </div>


        <br/>
        <div class="row">




                <div class="col-lg-6">


                    <form  action="" method="post">

                        <div class="control-group">
                            <label class="control-label" for="nome"></label>

                            <input type="text" class="form-control input-lg" id="nome" name="usuario" placeholder="usuario" value="" required="">

                        </div>

                        <div class="control-group">
                            <label class="control-label" for="nome"></label>

                            <input type="password" class="form-control input-lg" name="senha" placeholder="senha" value="">


                        </div>

                        <div class="control-group">
                            <label class="control-label" for="nome"></label>

                            <input type="text" class="form-control input-lg"  name="album_local" placeholder="Local"  required="" value="">

                        </div>

                        <!-- Button -->
                        <div class="control-group">
                            <label class="control-label" for="salvar"></label>
                            <div class="controls">
                                <button id="salvar" name="Cadastrar" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>


        <br/>
        <div class="row">
            <div class="col-lg-3 col-md-6">

            </div>
            <div class="col-lg-3 col-md-6">

            </div>
            <div class="col-lg-3 col-md-6">

            </div>
            <div class="col-lg-3 col-md-6">

            </div>
        </div>
        <!-- /.row -->
        <div class="row">

            <!-- /.col-lg-8 -->
            <div class="col-lg-4">


            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/assets/js/jquery-2.1.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/assets/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/assets/js/sb-admin-2.js"></script>

</body>

</html>