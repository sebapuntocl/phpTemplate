<?php

require_once "models/enlaces.php";
require_once "models/ingreso.php";

require_once "controllers/ingreso.php";
require_once "controllers/template.php";
require_once "controllers/enlaces.php";


require_once "controllers/usuarios-Ctr.php";
require_once "models/usuarios-Mdl.php";

$template = new TemplateController();
$template -> template();