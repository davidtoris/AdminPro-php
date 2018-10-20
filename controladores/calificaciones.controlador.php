<?php 


class ControladorCalificaciones{

	/*=============================================
	MOSTRAR CALIFICACIONES
	=============================================*/

	static public function ctrMostrarCalificaciones(){

		$tabla = "calificaciones";

		$respuesta = ModeloCalificaciones::MdlMostrarCalificaciones($tabla);

		return $respuesta;
    }
    

    /*=============================================
	CREAR CALIFICACIONES
	=============================================*/

	static public function ctrCrearCalificaciones(){

        if(isset($_POST["nuevaMateria"])){

            $tabla = "calificaciones";

            $datos = array("alumno" => 'alumno',
                           "materia" => $_POST["nuevaMateria"],
                           "bim1" => $_POST["nuevoBim1"],
                           "bim2" => $_POST["nuevoBim2"],
                           "bim3" => $_POST["nuevoBim3"],
                           "bim4" => $_POST["nuevoBim4"],
                           "final"=> $_POST["nuevoFinal"]);
        
            $respuesta = ModeloCalificaciones::MdlCrearCalificaciones($tabla, $datos);
            
    
            if($respuesta == "ok"){
    
                echo '<script>
    
                alert("Calificación creada");
                window.location ="calificaciones";
                </script>';
    
    
            }else{
                echo '<script>
                window.location ="mal";
                </script>';
            }
        }    
        

    }
    


}