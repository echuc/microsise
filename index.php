<!DOCTYPE html>
<html lang="es">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro de usuarios</title>

	<!-- Framework usado : Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>
  <body>
	<div class="container">
	  <div class="info">
		 <h2 class="bg-primary">Registro de usuarios basados en Roles</h2>
		 <div class="bg-info">
		  <p class="text-danger">usuarios disponibles:  admin y user</p>
		 </div>

		  <div class="col-md-6 col-md-offset-3">
					<h4></span>Accede con tus datos de usuario<span class="glyphicon glyphicon-user"></h4><br/>
							<div class="block-margin-top">
							  <?php
							  // validación de los errores si no se accede correctamente
								$errors = array(
									1=>"Usuario o Password inválido, Intentalo de nuevo",
									2=>"Por favor ingresar para acceder al sistema"
								  );

								$error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

								if ($error_id == 1) {
										echo '<p class="text-danger">'.$errors[$error_id].'</p>';
									}elseif ($error_id == 2) {
										echo '<p class="text-danger">'.$errors[$error_id].'</p>';
									}
							   ?>
							   <!-- Formulario de datos -->
							  <form action="autenticar.php" method="POST" class="form-signin col-md-8 col-md-offset-2" role="form">
								  <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br/>
								  <input type="password" name="password" class="form-control" placeholder="Password" required><br/>
								  <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
							 </form>
						   </div>
			</div>

	  </div>


	</div>


	<!-- jQuery (necesario para usar con  Bootstrap's JavaScript plugins)
		 se agrega script localmente -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<!--  Se incluye el framework de boostrap (solo es para el diseño) -->
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>
