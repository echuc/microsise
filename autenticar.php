<?php
	// conexión con la bd
	require 'conexion.php';

	// inicio de la sesión
	session_start();

	// se recuperan los valores del formulario de login
	$username = "";
	$password = "";
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}

	//echo $username ." : ".$password;

	//Ejecutar el query para determinar que usuario se esta logeando
	$resultado = $db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
	if (($resultado->num_rows) ==0) {
		header('Location: index.php?err=1');
	} else  {
		// si el usuario existe en la bd, entonces se  crea su sesión segun su rol
		$fila = $resultado->fetch_assoc();
		session_regenerate_id();
		$_SESSION['sess_user_id'] = $fila['id'];
		$_SESSION['sess_username'] = $fila['username'];
		$_SESSION['sess_nombre'] = $fila['nombre'];
		$_SESSION['sess_userrole'] = $fila['role'];
		//echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "admin"){
			header('Location: adminInicio.php');
			//echo "<h1>Ahora sere ADMIN </h1>";
		}else{
			header('Location: userInicio.php');
			//echo "<h1>Logueado como USUARIO NORMAL</h1>";
		}
	}

	/*

	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$query = $dbh->prepare($q);
	$query->execute(array(':username' => $username, ':password' => $password));
	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
		$_SESSION['sess_userrole'] = $row['role'];

		echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "admin"){
			header('Location: adminhome.php');
		}else{
			header('Location: userhome.php');
		}


	}
	*/


?>
