<?php
ob_start() ;
?>


<?php
include("php/conexion.php")  

?>

<?php  
if (isset($_POST['registra']))
 {
	if (!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['correo']) && !empty($_POST['contra'])) 
	{
		mysqli_query($cnx,"INSERT into t_usuarios_2 values 
			( '$_POST[nombre]',
			  '$_POST[usuario]',
			  '$_POST[correo]',
			  '$_POST[contra]')");
		
header("location:inicio.php");	

			
	}
	
	

}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<!-- icono de la pagina -->
  <link rel="icon" href="images/logo.jpg">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

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
           <a class="dropdown-item" href="inicio.php"><i class="fas fa-user"></i> Inicia Session</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
</section>
<!--Aqui termina el Navbar-->

<section>
	<div class="jumbotron" style="background-color: #F39C12" align="center">
		<center>
			<font face="Itim, cursive"><h1><b>Disfruta de los mejores alimentos a la puerta de tu casa<br>por el mejor Precio</b></h1></font>
		</center>
</section>

<section>
	<div class="container"  >
	<div class="row" style=" border-color: black;" >
	 		<div class="col-sm-6 offset-sm-3" style=" background-color: #FFFFFF;"  >
	 			<br>
	 			<br>
	
	 			<form  action=""  method="post">
	 				<p><center>
		 				<h3><b>Registrarse</b><br></h3>
		 				<br>
		 				
		 				<input type="text" class="form-control" name="nombre" placeholder="Nombre"><br>
						    	
						<input type="text" class="form-control" name="usuario" placeholder="Usuario"><br>

						<input type="email" class="form-control" name="correo" placeholder="Correo Electronico"><br>

						<input type="password" class="form-control" name="contra" placeholder="Contraseña"><br>
						
						 

						 <!-- Sign in button -->
						<a href="inicio.php"></a>
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="registra" > Registrarse</button>
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
						 
						 ¿Ya tienes cuenta?<a href="inicio.php">Ingresa</a><br><br>
						 </center>

						 	
					</p>


					</form> 
	  			
	  		</div>

	  	</div>	
	  	</div>

</section>
<br>
<br>
</body>
</html>
<?
ob_end_flush();
?>