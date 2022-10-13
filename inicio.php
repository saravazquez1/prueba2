<?php
ob_start() ;
?>

<?php

# Se creao una sesión
session_start();

# Se manda llamar el archivo de conexión
require_once 'php/conexion.php';

# Se verifica si se presiona el botón llamado iniciar-sesion
if (isset($_POST['inicia']))
{
	# Se guarda el contendio de las cajas de texto en las variables $us y $ps
	$us=$_POST['usuario'];
	$ps=$_POST['contra'];
	
	# Se valida que las variables no esten vacias o nulas
	if (!empty($us) &&  !empty($ps))
	{
		# Query de consulta
		$query = "SELECT * from t_usuarios_2 WHERE usuario='".$us."' AND contra='".$ps."'";

		# Asigna el registro del Query
		$registro=mysqli_query($cnx,$query);

		# Asigna los datos del registro a la variable $campo
		$campo=mysqli_fetch_array($registro);

		# Cuenta la cantidad de registros del Query
		$count=mysqli_num_rows($registro);

		# Valida que la variable count tenga un valor
		if($count)	
		{	
			if ($campo['usuario']=="admin" AND $campo['contra'] == $ps)
			{
				$_SESSION['nombre'] = $campo['name'];
				header("location:vista_admin.php");	
			}
			else
			{
				$_SESSION['nombre'] = $campo['nombre'];
				$_SESSION['usuario'] = $campo['usuario'];
				header("location:orden.php");	
			}	
		} 
		else
		{
			echo "<div class='alert alert-danger'>
			<strong><h4>Ha surgido un Error<br>Verifica las credenciales de Acceso!</strong></div>";
		}
		
	}
}
?>








<!DOCTYPE html>
<html>
<head>
	<title>Inicia Sesion</title>
<!-- icono de la pagina -->
	<link rel="icon" href="images/logo.jpg">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:ital,wght@1,500&display=swap" rel="stylesheet">

</head>
<body style="background-color: #BA4A00">

	<section>
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark " style="background-color: #BA4A00  ">
   <a class="navbar-brand" href="index.php"><font color="#FFFFFF "><font face="Lobster, cursive"><h2>Meal Express</h2></font></font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- Dropdown -->
      
      
      <li class="nav-item">
        <a class="nav-link" href="inicio.php"><font color="#FFFFFF "><font size="4"><b>Ordena ahora</b></font></font></a>
      </li>
      
     
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fab fa-facebook-f"></i> Facebook
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fab fa-instagram"></i> Instagram</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Inicia Sesion </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="registro.php"><i class="fas fa-user"></i> Crear cuenta</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
</section>
<section>
	<div class="jumbotron" style="background-color: #F39C12">
		<center>
			<font face="Itim, cursive"><h1><b>Disfruta de los mejores alimentos a la puerta de tu casa<br>por el mejor Precio</b></h1></font>
		</center>
		
	</div>
</section>

<section>
	<div class="container" >
	<div class="row" >
	 		<div class="col-sm-6 offset-sm-3" style=" background-color: #FFFFFF;"  >
	 			<br>
	 			<br>
				<form action="" method="post" >
	 			<center>
	 				<p>
		 				<h3><b>Iniciar Sesion</b><br></h3><br>
		 				
		 				<input type="text" class="form-control" name="usuario" placeholder="Usuario"><br>
						    	
						<input type="password" class="form-control" name="contra" placeholder="Contraseña"><br>
						
						<!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="inicia"><b>Iniciar</b></button>
						 <br>
						 <p>
						 	 <a type="button" class="btn-floating btn-fb btn-sm">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a type="button" class="btn-floating btn-tw btn-sm">
        <i class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i class="fab fa-github"></i>
      </a></p>
						 
						 ¿No tienes cuenta?<a href="registro.php">Creala</a><br><br>
						 </center>

						 	
					</p>


					 </center>
	  			</form>
	  		</div>

	  		
	  	</div>
</section>

</body>
</html>

<?php
ob_end_flush();
?>	