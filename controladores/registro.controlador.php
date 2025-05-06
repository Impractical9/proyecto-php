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
 
}

/*=============================================
    Ingresar Usuario
    =============================================*/

    public function ctrIngreso(){

        if(isset ($_POST["ingresoCorreo"])){

            $tabla = "registro";
            $item = "correo";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, $item, $valor);

            if($respuesta["correo"] == $_POST["ingresoCorreo"] && $respuesta["clave"] == $_POST["ingresoClave"]){ 

                $_SESSION["validarIngreso"] = "ok";

                echo '<script>

                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }

                    window.location = "index.php?pagina=inicio";

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