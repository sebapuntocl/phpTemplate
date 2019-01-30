<body id="login-bg">
	<div class="container ">
		<div class="row">
			<div class="login">
				<div class="login-triangle"></div>
				
				<h2 class="login-header">Ventas app</h2>
				<form class="login-container" method="POST">
					<p><input type="text" class="form-control" placeholder="Usuario" name="usuarioIngreso" required></p>
					<p><input type="password" class="form-control" placeholder="Contraseña" name="passwordIngreso" required></p>
					<p><input type="submit" value="Entrar"></p>
					<?php
       					$ingreso = new ingresoLoginController();
        				$ingreso -> loginController();
        			?>
				</form>
			</div>
		</div>
	</div>
</body>