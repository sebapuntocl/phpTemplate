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
		<div class="col-md-12">
			<h1>Este es un link</h1>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. At rem excepturi, nesciunt dolore veritatis magni, illo cumque in, dolorem accusamus doloremque tenetur repellat architecto! Quasi iure libero, excepturi ea saepe?

		</div>
	</div>
</div>
		