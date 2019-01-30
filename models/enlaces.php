<?php 

class EnlacesModels{

	public function enlacesModel($enlaces){

		
		if(
		   $enlaces == "dashboard" ||
		   $enlaces == "link" ||
		   $enlaces == "usuarios" ||
		   $enlaces == "salir"
		   ){

			$module = "views/modules/".$enlaces.".php";
		}	

		else if($enlaces == "index"){
			$module = "views/modules/ingresar.php";
		}

		else{
			$module = "views/modules/ingresar.php";		
		}
		
		return $module;

	}


}





