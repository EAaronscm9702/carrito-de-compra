<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" type="text/css"/>
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php 
    //lenguaje php
    include("include/menu.php");
    ?>

    <!--INICIO CONTENIDO-->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>REGISTRO DE PROVEEDORES</h4>
                        <div class="card">
                            <div class="card-body">
                                <form action="operaciones/registrar_usuario.php" method="post">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">RUC:</label>
                                        <input type="number"
                                        name="ruc"
                                        placeholder=""
                                        class="form-control col-lg-3 col-md-3 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">RAZÓN SOCIAL:</label>
                                        <input type="text"
                                        name="raso"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">CORREO ELECTRONICO:</label>
                                        <input type="email"
                                        name="correle"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">TELÉFONO:</label>
                                        <input type="number"
                                        name="telef"
                                        placeholder=""
                                        class="form-control col-lg-3 col-md-3 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">DIRECCIÓN:</label>
                                        <input type="text"
                                        name="direcc"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">METODO DE PAGO:</label>
                                        <input type="text"
                                        name="medepa"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12"></label>
                                        <button type="submit" class="btn btn-success">Guarda</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN CONTENIDO-->

    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
    
</body>
</html>