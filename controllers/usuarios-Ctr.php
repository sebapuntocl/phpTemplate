<?php 

class UsuariosControllers{


	public function ListarController(){
		$respuesta = UsuariosModels::VerUsuariosModels("usuarios");
	
	foreach($respuesta as $row => $item){

		if( $item["rol"] == 1){ $estado = "<span class='tag label label-warning label-important'>Vendedor</span>";
		}
		elseif  ($item["rol"] == 0) { $estado =  "<span class='tag label label-success label-important'>Administrador</span>";
		}

		echo'
			<tr class="odd gradeX">
            	<td>'.$item["nombre"].'</td>
				<td>'.$item["usuario"].'</td>
				<td>'.$item["email"].'</td>
				<td>'.$estado.'</td>
            	
            	<td>
            		<a href="#editarUsarios'.$item["id_us"].'" data-toggle="modal"><button class="btn btn-info"  data-toggle="tooltip" data-placement="bottom" title="Actualizar">
            		<i class="fas fa-user-edit"></i></button></a>

					<a href="#eliminarUsuario'.$item["id_us"].'"  data-toggle="modal" ><button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
					<i class="fas fa-trash-alt"></i></button></a>

				</td> 
            	
			</tr>
			
			<!-- Modal Editar Usuarios  -->

<div class="modal fade" id="editarUsarios'.$item["id_us"].'" class="modal fade">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background:#3c8dbc; color:white">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Vas a editar a <b>'.$item["nombre"].'</b></h4>
			</div>
			<div class="modal-body">
				<form id="contact-form" method="post"  role="form">
						<input type="hidden" value="'.$item["id_us"].'" name="id" >
							<div class="messages">
							</div>
							<div class="controls">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="nombre">Nombre *</label>
											<input id="nombre" type="text" name="editaNombre" class="form-control" value="'.$item["nombre"].'" required>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="direccion">Correo Electronico *</label>
											<input id="agente" type="text" name="editaEmail" class="form-control" value="'.$item["email"].'">
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="agente">Perfil</label>
											<select class="form-control" name="editaPerfil">
                                            <option value="'.$item["rol"].'">'.$estado.'</option>
                                          	<option value="1">Vendedor</option>
											<option value="0">Administrador</option>
                                        </select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="direccion">Usuario *</label>
											<input type="text" name="editaUsuario" class="form-control" value="'.$item["usuario"].'">
										</div>
									</div>
								</div>
								
								<div class="row">
									
									<div class="col-md-12">
										<input type="submit" class="btn btn-success btn-send" value="Editar">
										<button type="button" class="btn btn-danger btn-close pull-right" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
							
						</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Descontar STOCK -->

<div class="modal fade" id="eliminarUsuario'.$item["id_us"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">¿Estás seguro?</h4>
            </div>
            <div class="modal-body">
                <p>¿Seguro que quieres borrar al Usuario?</p>
                <p class="text-warning"><small>Si lo borras, nunca podrás recuperarlo.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Cerrar</button>
               <a href="index.php?action=usuarios&idBorrar='.$item["id_us"].'"><button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar">Eliminar</button></a></td>
            </div>
        </div>
    </div>
</div>

			';
			
			

       } 	
	}

	public function crearUsuariosControllers(){

		if(isset($_POST["usuario"])){

			$datosController = array( "usuario"=>$_POST["usuario"],
									  "nombre"=>$_POST["nombre"], 
								      "email"=>$_POST["email"],
								      "password"=>$_POST["clave"],
									  "rol"=>$_POST["perfil"]

								  	  );
			$respuesta = UsuariosModels::NuevoUsuario($datosController, "usuarios");

			if($respuesta == "success"){

				echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡Nuevo Usuario agregado!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "usuarios";
							  } 
					});


				</script>';

			}

			else{

				echo $respuesta;

			}

		}

	}


public function editarUsuariosController(){

		if(isset($_POST["editaNombre"])){

				                      
			$datosController = array( "id_us"=>$_POST["id"],
									  "nombre"=>$_POST["editaNombre"], 
								      "email"=>$_POST["editaEmail"],
								  	  "rol"=>$_POST["editaPerfil"],
								  	  "usuario"=>$_POST["editaUsuario"]
								  		);

			$respuesta = UsuariosModels::actualizarUsuariosModel($datosController, "usuarios");

			if($respuesta == "success"){

				echo'<script>

					swal({
						  title: "¡Buen trabajo!",
						  text: "¡Has editado el usuario!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "usuarios";
							  } 
					});


				</script>';

			}

			else{

				echo $respuesta;

			}

		}
	
	}




	public function borrarUsuariosController(){

		if(isset($_GET["idBorrar"])){

			$datosController = $_GET["idBorrar"];

			$respuesta = UsuariosModels::borrarUsuariosModel($datosController, "usuarios");

			if($respuesta == "success"){

					echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡El Usuario se ha borrado correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "usuarios";
							  } 
					});


				</script>';

			}
		}

	}

}