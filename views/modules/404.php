<?php 
  
 session_start();
    if (!$_SESSION["validar"]) {
        header("location:index.php?action=ingresar");
        exit();
    }

 
 include "views/modules/cabezote.php";

?>



<div class="container">
    <div class="jumbotron">
        <div class="text-center"><i class="fas fa-frown fa-5x" style="color:#d9534f;"></i></div>
        <h1 class="text-center">404! Error<p> </p><p><small class="text-center"> Pagina no encontrada.</small></p></h1>
        <p class="text-center">Algo salio mal mejor volvamos atras.</p>
        <p class="text-center"><a class="btn btn-primary btn-block" href="javascript:history.back(1)">Volver</a></p>
    </div>
</div>