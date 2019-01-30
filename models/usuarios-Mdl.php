<?php 

require_once "conexion.php";

class UsuariosModels extends Conexion{


public function VerUsuariosModels($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
	
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

public function NuevoUsuario($datosModel, $tabla){

	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, rol, usuario, password ) VALUES (:nombre, :aPaterno, :aMaterno, :email, :rol, :usuario, :password )");	

		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":rol", $datosModel["rol"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		
		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}


public function borrarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_us = :id_us");
		$stmt->bindParam(":id_us", $datosModel, PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}

	public function actualizarUsuariosModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, rol = :rol ,usuario = :usuario /*, password = :password*/  WHERE id_us = :id_us");

			$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
			$stmt->bindParam(":rol", $datosModel["rol"], PDO::PARAM_STR);
			$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		//	$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
			$stmt->bindParam(":id_us", $datosModel["id_us"], PDO::PARAM_INT);

			if($stmt->execute()){

				return "success";

			}

			else{

				return "error";

			}

			$stmt->close();

		}

public function borrarUsuariosModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_us = :id_us");
		$stmt->bindParam(":id_us", $datosModel, PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}


}