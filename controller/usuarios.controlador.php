<?php 

class crtUsuarios{

    static public function ctrMostrarUsuarios(){
        $tabla="usuarios";
        $respuesta=mdlUsuarios::mdlMostrarUsuarios($tabla);

        return $respuesta;
    }

}


?>