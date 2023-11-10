<button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target=".registrar">READY +</button>


<div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Large modal</h5>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="operaciones/registrar_usuario.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">DNI:</label>
                                        <input type="number"
                                        name="dni"
                                        placeholder=""
                                        class="form-control col-lg-3 col-md-3 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Nombres y Apellidos:</label>
                                        <input type="text"
                                        name="ApeyNom"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Correo Electronico:</label>
                                        <input type="email"
                                        name="correo"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Telefono:</label>
                                        <input type="number"
                                        name="telefono"
                                        placeholder=""
                                        class="form-control col-lg-3 col-md-3 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Dirección:</label>
                                        <input type="text"
                                        name="direccion"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Fecha de Nacimiento:</label>
                                        <input type="date"
                                        name="fechaNa"
                                        placeholder=""
                                        class="form-control col-lg-3 col-md-3 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Rol:</label>
                                        <select name="id_rol" id="">
                                            <option value=""></option>
                                            <?php
                                            $b_roles = "SELECT * FROM roles";
                                            $r_b_roles = mysqli_query($conexion, $b_roles);
                                            while ($datos_roles = mysqli_fetch_array($r_b_roles)) { ?>
                                                <option value="<?php echo $datos_roles['id'];?>"><?php echo $datos_roles['nombre']?></option>
                                            <?php }
                                            ?>
                                            <option value="3">Cliente</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Foto:</label>
                                        <input type="file" name="foto" placeholder="" class="form-control col-lg-3 col-md-3 col-sm-12" required accept="image/*">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12"></label>
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
            </form>
        </div>
        </div>
    </div>
</div>