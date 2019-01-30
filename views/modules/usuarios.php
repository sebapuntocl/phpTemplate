<?php 
  
 session_start();
    if (!$_SESSION["validar"]) {
        header("location:index.php?action=ingresar");
        exit();
    }

 
 include "views/modules/cabezote.php";

?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<form method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="* Nombre" required>
				</div>
								<div class="form-group">
					<input type="text" class="form-control" name="usuario" placeholder="* Usuario" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<select name="perfil" class="form-control"required>
						<option value="">Seleccione Perfil</option>
						<option value="1">Vendedor</option>
						<option value="0">Administrador</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="pass1"  placeholder="* Clave" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="clave" id="pass2" placeholder="* Confirma Clave"  onkeyup="checkPass(); return false;" required>
                   <span id="confirmMessage" class="confirmMessage"></span>
				</div>
				<div class="form-group">
					<input type="Submit" class="btn btn-primary btn-block" value="Crear" id="btn-crear">
				</div>
				<?php 
	 				$Usuarios = new UsuariosControllers();
	 				$Usuarios -> crearUsuariosControllers();
 				?>
			</form>
		</div>
		<div class="col-md-9">
			<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Lista Usuarios
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover tablas">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Usuario</th>
                                            <th>Email</th>
                                            <th>Perfil</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php 
	 										$Usuarios = new UsuariosControllers();
	 										$Usuarios -> ListarController();
	 										$Usuarios -> editarUsuariosController();
	 										$Usuarios -> borrarUsuariosController();
 										?>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
		</div>
	</div>
</div>