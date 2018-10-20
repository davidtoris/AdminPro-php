<?php

require_once "conexion.php";

class ModeloCalificaciones{

    /*=============================================
	MOSTRAR CALIFICACIONES
	=============================================*/

	static public function mdlMostrarCalificaciones($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

    }
    
    /*=============================================
	CREAR CALIFICACIONES
	=============================================*/

	static public function MdlCrearCalificaciones($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(alumno, materia, bim1, bim2, bim3, bim4, final) VALUES (:alumno, :materia, :bim1, :bim2, :bim3, :bim4, :final)");

		$stmt->bindParam(":alumno", $datos["alumno"], PDO::PARAM_STR);
		$stmt->bindParam(":materia", $datos["materia"], PDO::PARAM_STR);
		$stmt->bindParam(":bim1", $datos["bim1"], PDO::PARAM_INT);
		$stmt->bindParam(":bim2", $datos["bim2"], PDO::PARAM_INT);
		$stmt->bindParam(":bim3", $datos["bim3"], PDO::PARAM_INT);
		$stmt->bindParam(":bim4", $datos["bim4"], PDO::PARAM_INT);
		$stmt->bindParam(":final", $datos["final"], PDO::PARAM_INT);
		

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

}