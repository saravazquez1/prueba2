<?php
ob_start() ;
?>

<?php


session_start();

require_once 'php/conexion.php'
?>

<?php
if (isset($_POST['eliminar'])) 
{
	if (!empty($_POST['nombre']))
	{
		$sql="DELETE from t_ordenes where nombre='$_POST[nombre]'";
		$registro=mysqli_query($cnx,$sql);
		header("location:vista_admin.php");
	}
}
?>

<?php
if (isset($_POST['actualizar'])) 
{
	if (!empty($_POST['nombre']))
	{
		mysqli_query($cnx,"UPDATE t_ordenes set
			fecha='$_POST[id]',
			fecha='$_POST[fecha]',
			nombre='$_POST[nombre]',
			direccion='$_POST[direccion]',
			plato='$_POST[plato]',
			bebida='$_POST[bebida]'
			fecha='$_POST[precio]',
			total='$_POST[total]',
			where nombre='$_POST[usuario]'");
	}
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
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
<body>

	<<section>
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
      
      
      <li class="nav-link"><a href="orden.php"><font color="FFFFFF"><font size=4><b><?php echo $_SESSION['nombre'] ?></b></font></font></a></li>
      <li class="nav-item">
        <a class="nav-link" href="platillo.php"><font color="#FFFFFF "><font size="4"><b>Menu</b></font></font></a>
        <a class="nav-link" href="bebida.php"><font color="#FFFFFF "><font size="4"><b>Menu</b></font></font></a>
      </li>
      
     
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-link"><a href="logout.php"><font color="FFFFFF"><font size=4>Cerrar Sesión</font></font></a></li>
    </ul>
</nav>
<!--/.Navbar -->
</section>

<section>
	
<div class="container">

			<div class="row">
			

				<div class="col-md-12">
					<br><br><br> 	 	
					<table class="table table-hover table-condensed table-bordered">
						<tr>
							<td>id</td>
							<td>Fecha y Hora</td>
							<td>Nombre</td>
							<td>Direccion</td>
							<td>pedido</td>
							<td>precio</td>
							<td>total</td>
							<td>Usuario</td>
						</tr>
						<?php
						$sql="SELECT * from t_ordenes";
						$registro=mysqli_query($cnx,$sql);
						while($campo=mysqli_fetch_array($registro))
						{

							?>
							<tr class="small">
								<td><?php echo $campo['id'];?></td>
								<td><?php echo $campo['fecha'];?></td>
								<td><?php echo $campo['nombre'];?></td>
								<td><?php echo $campo['direccion'];?></td>
								<td><?php echo $campo['plato'];?></td>
								<td><?php echo $campo['bebida'];?></td>
								<td><?php echo $campo['total'];?></td>
								<td><?php echo $campo['usuario'];?></td>
							</tr>
							<?php
						}
						?>
					</table>

				</div>	
			</div>


						
					
		<button type="submit" class="btn btn-primary btn-lg btn-warning" name="eliminar">Eliminar</button>
		<button type="submit" class="btn btn-primary btn-lg btn-warning" name="actualizar">Actualizar</button>
		
	</form>
</div>
</section>
</body>
</html>