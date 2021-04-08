<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/jpg" href="public/img/favicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Categorias  Contactos </title>
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	  <div class="container">
	  	<?php require_once "menu.php"; ?>

	  	<div class="jumbotron">
	  		<h1 class="display-4">Categorias</h1>
	  		<button class="btn btn-primary">
	  		  <span class="fas fa-book"></span>	Agregar Categoria
	  		</button>
	  		<hr class="my-4">
	  		  <div id="cargaTablaCategorias">
	  		  	
	  		  </div>
	  		
	  	</div>
	  </div>


	  <script src="public/js/categorias.js"></script>
</body>
</html>