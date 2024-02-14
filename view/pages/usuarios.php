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
                    <input type="text" class="form-control" placeholder="nombre" name="nom_perfil">
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
                        <i class="fas fa-paperclip"></i> Adjuntar Imagen
                        <input type="file" name="uploadImg">
                    </div>
                    <img class="prevImgPerfil img-fluid py-2" width="200" height="200">
                    <p class="help-block small">Dimensiones:480px * 382px | Peso Max. 2MB | Formato: JPG o PNG</p>
                </div>

                <!-- Arreglar roles -->
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" placeholder="Rol" name="pass_user">
                    <span class="glyphicon glyphicon-king form-control-feedback"></span>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>




            </form>

        </div>

    </div>

</div>



