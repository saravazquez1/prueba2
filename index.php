<!DOCTYPE html>
<html>
<head>
	<title>Meal Express</title>
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
<body style="background-color:  #BA4A00 ">

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
        <a class="nav-link" href="Ordena.php"><font color="#FFFFFF "><font size="4"><b>Ordena ahora</b></font></font></a>
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
          <a class="dropdown-item" href="registro.php"><i class="fas fa-user"></i> Crear cuenta</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
</section>
<br>
<br>
<section>
	<div class="jumbotron" style="background-color: #F39C12 ">
		<center>
			<font face="Itim, cursive"><h1>Disfruta de los mejores alimentos a la puerta de tu casa<br>por el mejor Precio</h1></font>
		</center>		 
		</div>
</section>


<br>
<section>
  <div class="container" >
  <div class="row">
    <div class="col-md">
      <!-- As a link -->
<nav class="navbar center" style="background-color: #F39C12; " >
  <a class="navbar-brand"><b>Menu</b></a>
</nav><br>
    </div>
  </div>
  <div class="row">
  <div class="col-md">
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs"style="background-color: #F39C12 ">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs " role="tablist">
          <li class="nav-item" >
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-utensils mr-1"></i>
              <b>Comidas</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-beer"></i>
             <b> Bebidas</b></a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
          <table class="table table-borderless" style="background-color: #F39C12 ">
  
  <tbody>
    <tr align="center">
      
      <td>
        <div class="card">
          <div class="card-body">
        <img src="images/enchilada.jpg" width="300" height="250"  class="rounded mb-0"><br>
        <font face="Asap Condensed, sans-serif"><font size="5">Enchiladas Verdes<br><center> $80.00</center></font></font>
      </div>
  </div>

      </td>
      <td>
        <div class="card">
          <div class="card-body">
        <img src="images/taco.jpg" width="300" height="250"  class="rounded mb-0"><br>
        <font face="Asap Condensed, sans-serif"><font size="5">Tacos de Bistek<br><center> $50.00</center></font></font>
      </div>
      </div>


      </td>

      
    </tr>
     <tr align="center">
      
      <td>
        <div class="card">
          <div class="card-body">
        <img src="images/hamburguesa.jpg" width="300" height="250"  class="rounded mb-0"><br>
        <font face="Asap Condensed, sans-serif"><font size="5">Hamburguesa<br><center> $50.00</center></font></font>
      </div>
  </div>

      </td>
      <td>
        <div class="card">
          <div class="card-body">
        <img src="images/pastor.jpg" width="300" height="250"  class="rounded mb-0"><br>
        <font face="Asap Condensed, sans-serif"><font size="5">Tacos al Pastor<br><center> $50.00</center></font></font>
      </div>
      </div>


      </td>

      
    </tr>
     <tr align="center">
      
      <td>
        <div class="card">
          <div class="card-body">
        <img src="images/caldo_pollo.jpg" width="300" height="250"  class="rounded mb-0"><br>
        <font face="Asap Condensed, sans-serif"><font size="5">Caldo de Pollo<br><center> $60.00</center></font></font>
      </div>
  </div>

      </td>
      <td>
        <div class="card">
          <div class="card-body">
        <img src="images/mole.jpg" width="300" height="250"  class="rounded mb-0"><br>
        <font face="Asap Condensed, sans-serif"><font size="5">Mole<br><center> $60.00</center></font></font>
      </div>
      </div>


      </td>

      
    </tr>


       
  </tbody>
</table>
        </div>
        <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">
 <table class="table table-borderless">
  
  <tbody>
    
    <tr align="center">  
      <td>
        <div class="card">
        <div class="card-body">
        <img src="images/pepino.jpg" width="400" height="350">
        <font face="Asap Condensed, sans-serif"><br><font size="4"  class="rounded mb-0">Agua de Pepino con Limon<br>$40.00 pesos el Litro<br>Envio incluido
        </font></font>
      </div>
      </div>
      </td>
      <td>
        <div class="card">
        <div class="card-body">
        <img src="images/limonada.jpg" width="400" height="350">
        <font face="Asap Condensed, sans-serif"><br><font size="4"  class="rounded mb-0">Limonada refrescante<br>Litro a $35.00 pesos<br>Envio incluido</font></font>
      </div>
      </div>
      </td>
      
    </tr>
    
    <tr align="center">  
      <td>
        <div class="card">
        <div class="card-body">
        <img src="images/jamaica.jpg" width="400" height="350">
        <font face="Asap Condensed, sans-serif"><br><font size="4"  class="rounded mb-0">Agua de Jamaica<br>Litro a $35.00 pesos<br>Envio incluido</font></font>
      </div>
      </div>
      </td>
      <td>
        <div class="card">
        <div class="card-body">
        <img src="images/piña.jpg" width="400" height="350">
        <font face="Asap Condensed, sans-serif"><br><font size="4"  class="rounded mb-0">Agua de Piña<br>Litro a $40.00 pesos<br>Envio incluido</font></font>
      </div>
      </div>
      </td>
     
    </tr>
     <tr align="center">  
      <td>
        <div class="card">
        <div class="card-body">
        <img src="images/coca.jpg" width="400" height="350">
        <font face="Asap Condensed, sans-serif"><br><font size="4"  class="rounded mb-0">Coca Cola <br>Lata $15.00 pesos<br>Envio incluido</font></font>
      </div>
      </div>
      </td>
      <td>
        <div class="card">
        <div class="card-body">
        <img src="images/pepsi.jpg" width="400" height="350">
        <font face="Asap Condensed, sans-serif"><br><font size="4"  class="rounded mb-0">Pepsi Cola<br>Lata $15.00 pesos<br>Envio incluido</font></font>
      </div>
      </div>
      </td>
     
    </tr>
    
  </tbody>
</table>
          </div>
        </div>

      </div>
  </div>
    
  </div> 
    
  </div>
</div>
</section>

</body>
</html>