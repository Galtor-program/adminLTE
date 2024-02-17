<div class="content-wrapper" style="min-height: 717px;">

    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Administrador Usuarios</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <button type="button" class="btn btn-success crear-usuarios" data-toggle="modal"
                                    data-target="#modal-crear-usuarios">
                                    Crear Nuevo Usuario
                            
                            </button><br>

                        </div><br>
                        <div class="card-body">
                            <table class="table table-borderer table-stripped dt-responsive tablaperfil" width="100%">
                                <thead>
                                    <tr>
                                       <th style ="width: 10px">#</th>             
                                       <th>Nombre</th> 
                                       <th>Usuario</th> 
                                       <th>Foto</th>
                                       <th>Rol</th>
                                      <th>Acciones</th> 
                                    </tr>
                                </thead>

                                 <tbody>
                                    <?php 
                                    foreach ($usuarios as $key => $value) {
                                    
                                    ?>
                                    <tr>
                                        
                                        <td><?php echo ($key+1)?></td>
                                        <td><?php echo $value ["usuario"]?></td>
                                        <td><?php echo $value ["nombre"]?></td> 
                                        <td><?php echo $value ["foto"]?></td>
                                        <td><?php echo $value ["rol"]?></td>
                                        <td>    
                                            <div class= "btn-group">

                                                    <button class = "btn btn-warning btn-sm">
                                                        <i class="glyphicon glyphicon-edit text-white"></i>
                                                    </button>
                                                    <button class = "btn btn-danger btn-sm">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                    </button>

                                            </div>
                                        </td>    
                                    </tr> 
                                    <?php 
                                    }
                                    ?>       
                                 </tbody>   
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>


<!-- Modal de crear usuarios -->


<div class="modal modal-default fade" id="modal-crear-usuarios">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="alert alert-success alert-dismissible">Agregar nuevo usario</h4>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" placeholder="nombre" name="nom_usuarios">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" placeholder="usuario" name="nom_user">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" placeholder="password" name="pass_user">
                    <span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <div class="btn btn-default btn-file" bis_skin_checked="1">
                        <i class="glyphicon glyphicon-file"></i> Adjuntar Imagen
                        <input type="file" name="uploadImg">
                    </div>
                    <img class="prevImgPerfil img-fluid py-2" width="200" height="200">
                    <p class="help-block small">Dimensiones:480px * 382px | Peso Max. 2MB | Formato: JPG o PNG</p>
                </div>

                <!-- Arreglar roles -->
                <div class="form-group has-feedback">
                    <label>Rol</label>
                    <select class="form-control" name="rol_user" required>
                        <option value="1">admin</option>
                        <option value="1">vendedor</option>            
                    </select>
                   
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>

            <?php 
                $guardarUsuarios = new crtUsuarios(); 
                $guardarUsuarios -> ctrGuardarUsuarios();
            ?>


            </form>

        </div>

    </div>

</div>



