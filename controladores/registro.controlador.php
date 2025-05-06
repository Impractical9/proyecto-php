<?php
require_once "./modelos/registro.modelo.php";
class ControladorRegistro{

    static public function ctrRegistro(){

        if(isset($_POST["registroNombre"])){

            $tabla = "personas";

            $datos = array(
                "pers_nombre" => $_POST["registroNombre"],
                "pers_telefono" => $_POST["registroTelefono"],
                "pers_correo" => $_POST["registroCorreo"],
                "pers_clave" => $_POST["registroClave"]            

            );

            $respuesta = ModeloRegistro::mdlRegistro($tabla, $datos);

            

        }

    }

      /*=============================================
    Seleccionar Registros
    =============================================*/

    static public function ctrSeleccionarRegistro(){

        $tabla = "personas";

        $respuesta = ModeloRegistro::mdlseleccionarregistro($tabla, null,null);

        return $respuesta;
    }
 
    /*=============================================
    Ingresar Usuario
    =============================================*/

    public function ctrIngreso(){

        if(isset ($_POST["ingresoCorreo"])){

            $tabla = "personas";
            $item = "pers_correo";
            $valor = $_POST["ingresoCorreo"];

            $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, $item, $valor);

            if($respuesta["pers_correo"] == $_POST["ingresoCorreo"] && $respuesta["pers_clave"] == $_POST["ingresoClave"]){ 
                session_start();
                $_SESSION["validarIngreso"] = "ok";

                echo '<script>

                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }

                    window.location = "index.php?modulo=contenido";

                </script>';

            } else {

                echo '<script>

                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }

                </script>';

                echo '<div class="alert alert-success">la contraseña no es valida</div>';
            }


        }

    }
      /*=============================================
    Actualizar Usuario
    =============================================*/

    public static function ctrActualizar() {
        if (isset($_POST['actualizarNombre'], $_POST['actualizarTelefono'], $_POST['actualizarCorreo'], $_POST['actualizarClave'])) {

            $tabla = "registro";

            $datos = array(
                "id" => $_GET["id"], 
                "nombre" => $_POST["actualizarNombre"],
                "telefono" => $_POST["actualizarTelefono"],
                "correo" => $_POST["actualizarCorreo"],
                "clave" => password_hash($_POST["actualizarClave"], PASSWORD_DEFAULT)
            );

            $respuesta = ModeloRegistro::mdlActualizarRegistro($tabla, $datos);

            return $respuesta;
        }

        return null;
    }

}




  