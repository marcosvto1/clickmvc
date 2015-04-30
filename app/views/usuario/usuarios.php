<?php include 'lib/autentica.php'; ?>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("views/template/head_scripts.php") ?>

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
            <!-- /.col-lg-12 -->
        </div>


        <!-- /.row -->

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="/usuario/criar" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo Usuario</a>
            </div>

        </div>
<br/>
        <div class="row">

            <div class="col-lg-12">



                    <table id="tb_user" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->model->findAll() as $key => $value): ?>
                            <tr>
                                <td><?php print $value->id; ?></td>
                                <td><?php print $value->username; ?></td>
                                <td><a class="btn btn-sm btn-primary" href="/admin/editar_produto/<?php print $value->id;?>"><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbspEditar</a></td>
                                <td><a class="btn btn-sm btn-danger excluir" href="?action=remover&id=<?php print $value->id;?>"><span class="glyphicon glyphicon-trash"></span>&nbsp&nbspExcluir</a></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>






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

<!-- Metis Menu Plugin JavaScript -->
<script src="/assets/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/assets/js/sb-admin-2.js"></script>

</body>

</html>