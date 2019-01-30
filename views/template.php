<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="views/dist/images/logo.jpg" type="image/x-icon"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TITULO</title>
    <!-- Bootstrap Core CSS -->
    <link href="views/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="views/dist/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" >
    <link href="views/dist/css/font-awesome.css" rel="stylesheet">
    <link href="views/dist/css/sweetalert.css" rel="stylesheet" />
    <link href="views/dist/css/styles.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="views/dist/js/jquery-3.3.1.min.js"></script>
    <script src="views/dist/js/bootstrap.min.js"></script>
    <script src="views/dist/js/font-awesome.js"></script>
    <script src="views/dist/js/sweetalert.min.js"></script>

    <script src="views/dist/componentes/dataTables/jquery.dataTables.js"></script>
    <script src="views/dist/componentes/dataTables/dataTables.bootstrap.js"></script>





</head>

<body>

<?php
    $modulos = new Enlaces();
    $modulos -> enlacesController();
?>
    <script src="views/dist/js/main.js"></script>

</body>

</html>
