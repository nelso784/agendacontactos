<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/jpg" href="public/img/favicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contactos Agenda</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	  <div class="container">
	  	<?php require_once "menu.php"; ?>
	  	<div class="jumbotron">
	  		<h1 class="display-4">Contactos</h1>
	  		<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarContacto">
	  		  <span class="fas fa-user-plus"></span>	Agregar Contacto
	  		</button>
	  		<hr class="my-4">
	  		 <div id="cargaTablaContactos">
	  		  	
	  		  </div>
	  		
	  	</div>

	  	<?php 
              require_once "vistas/contactos/modalAgregar.php";
              require_once  "vistas/contactos/modalActualizar.php"
	  	?>
	  </div>


   <script src="public/js/contactos.js"></script>	
</body>
</html>