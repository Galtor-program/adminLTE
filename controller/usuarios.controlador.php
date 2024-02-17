<?php 

class crtUsuarios{

    static public function ctrMostrarUsuarios(){
        $tabla="usuarios";
        $respuesta=mdlUsuarios::mdlMostrarUsuarios($tabla);

        return $respuesta;
    }

    static public function ctrGuardarUsuarios(){
        if (isset($_POST["nom_usuarios"])){
            if(isset($_FILES["uploadImg"]["tmp_name"]) && !empty ($_FILES["uploadImg"]["tmp_name"])){
               list($ancho, $alto) = getimagesize($_FILES["uploadImg"]["tmp_name"]); 
                $nuevoAncho = 480;
                $nuevoAlto = 382;
                $directorio = "view/images/users";
                if($_FILES["uploadImg"]["type"] == "image/jpg"  ){
                    $aleatorio = mt_rand(100,999);
                    $ruta = $directorio."/".$aleatorio."jpg";
                    $origen = imagecreatefromjpeg($_FILES["uploadImg"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAlto, $nuevoAncho);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAlto, $nuevoAncho, $ancho, $alto);
                    imagejpeg($destino, $ruta);
                } else if ($_FILES["uploadImg"]["type"] == "image/png"){
                    $aleatorio = mt_rand(100,999);
                    $ruta = $directorio."/".$aleatorio."png";
                    $origen = imagecreatefrompng($_FILES["uploadImg"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAlto, $nuevoAncho);
                    imagealphablending($destino, FALSE);
                    imagesavealpha($destino, TRUE);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAlto, $nuevoAncho, $ancho, $alto);
                    imagepng($destino, $ruta);
                }else{
                    echo'<script>
                        swal({type: "error",
                               tittle: "Corregir",
                               text: "Formatos deben ser PNG o JPEG",
                               showConfirmationButton: true,
                               confirmButtonText: "Cerrar",
                        }).then(function(result){
                            if (result.value){
                                history.back();
                            }
                        });
                    
                    </script>';
                    return;    
                }

                $encriptarPassword = crypt($_POST["pass_user"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


                    $datos =array("nom_usuario"=>$_POST["nom_usuarios"],
                                 "nom_user"=>$_POST["nom_user"],
                                  "pass_user"=> $encriptarPassword,
                                  "rol_user"=> $_POST["rol_user"],
                                  "foto"=>$ruta);

                            echo "</pre>";  print_r($datos); echo "</pre>";

                    $tabla="usuarios";

                    $respuesta=mdlUsuarios::mdlguardarUsuarios($tabla,$datos); 



                 if($respuesta == "ok"){

						echo'<script>

						swal({
								type:"success",
							  	title: "¡CORRECTO!",
							  	text: "El usuario ha sido creado correctamente",
							  	showConfirmButton: true,
								confirmButtonText: "Cerrar"
							  
						}).then(function(result){

								if(result.value){   
								    history.back();
								  } 
						});

					</script>';

				}else{

                    echo "<div class='alert alert-danger mt-3 small'>registro fallido</div>";
                }

            }


        }
    }
}

?>