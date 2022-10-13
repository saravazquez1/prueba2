


<?php
ob_start() ;
?>

<!-- Iniciar Sesión -->
<?php
session_start();
?>

<!-- Códigos de CONEXION -->
<?php
include("php/conexion.php");
    #require_once('php/conexion.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title>Bebidas</title>
	<!-- Latest compiled and minified CSS -->
    <!-- icono de la pagina -->
    <link rel="icon" href="images/logo.jpg">
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
   <a class="navbar-brand" href="menu2.php"><font color="#FFFFFF "><font face="Lobster, cursive"><h2>Meal Express</h2></font></font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- Dropdown -->
      
      
      <li class="nav-link"><a  href="orden.php"><font color="FFFFFF"><font size=4><b><?php echo $_SESSION['nombre'] ?></b></font></font></a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><font color="FFFFFF"><font size="4">Menu</font></font></a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        
          <a class="dropdown-item" href="platillo.php">Platillos</a>
          
        </div>
      </li>
      
     
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-link"><a href="logout.php"><font color="FFFFFF"><font size=4>Cerrar Sesión</font></font></a></li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<section>
	<div class="jumbotron" style="background-color: #F39C12">
		<center>
			<font face="Itim, cursive"><h1>Bebidas</h1></font>
		</center>
		
	</div>
</section>

<section>
    
    <div class="jumbotron" style="background-color: #F39C12">
        <table class="table table-borderless">
  <tbody>
    <tr align="center">
      
      <td>
        <div class="card">
      
  
  


    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script>
        window.onload = function () {
            // Variables
            let baseDeDatos = [
                {
                    id: 1,
                    nombre: 'Agua de Piña ',
                     precio: 35,
                    imagen: 'images/piña.jpg'

                },
                {
                    id: 2,
                    nombre: 'Agua de  Jamaica',
                    precio: 35,
                    imagen: 'images/jamaica.jpg'
                },
                {
                    id: 3,
                    nombre: 'Agua de limon con pepino',
                    precio: 40,
                    imagen: 'images/pepino.jpg'
                },
                  {
                    id: 4,
                    nombre: 'Agua de coco',
                    precio: 40,
                    imagen: 'images/coco.jpg'
                },
                 {
                    id: 5,
                    nombre: 'Refresco ',
                    precio: 25,
                    imagen: 'images/coca.jpg'
                },  {
                    id: 6,
                    nombre: 'Agua de Melón',
                    precio: 25,
                    imagen: 'images/melon.jpg'
                },
                {
                    id: 7,
                    nombre: 'Limonada Fresca',
                    precio: 35,
                    imagen: 'images/limonada.jpg'
                }

            ]
            let $items = document.querySelector('#items');
            let carrito = [];
            let total = 0;
            let $carrito = document.querySelector('#carrito');
            let $total = document.querySelector('#total');
            let $botonVaciar = document.querySelector('#boton-vaciar');

            // Funciones
            function renderItems() {
                for (let info of baseDeDatos) {
                    // Estructura
                    let miNodo = document.createElement('div');
                    miNodo.classList.add('card', 'col-sm-4');
                    // Body
                    let miNodoCardBody = document.createElement('div');
                    miNodoCardBody.classList.add('card-body');
                    // Titulo
                    let miNodoTitle = document.createElement('h2');
                    miNodoTitle.classList.add('card-title');
                    miNodoTitle.textContent = info['nombre'];
                    // Imagen
                    let miNodoImagen = document.createElement('img');
                    miNodoImagen.classList.add('img-fluid');
                    miNodoImagen.setAttribute('src', info['imagen']);
                    // Precio
                    let miNodoPrecio = document.createElement('p');
                    miNodoPrecio.classList.add('card-text');
                    miNodoPrecio.textContent = info['precio'] + 'pesos';
                    // Boton 
                    let miNodoBoton = document.createElement('button');
                    miNodoBoton.classList.add('btn', 'btn-primary');
                    miNodoBoton.textContent = '+';
                    miNodoBoton.setAttribute('marcador', info['id']);
                    miNodoBoton.addEventListener('click', anyadirCarrito);
                    // Insertamos
                    miNodoCardBody.appendChild(miNodoImagen);
                    miNodoCardBody.appendChild(miNodoTitle);
                    miNodoCardBody.appendChild(miNodoPrecio);
                    miNodoCardBody.appendChild(miNodoBoton);
                    miNodo.appendChild(miNodoCardBody);
                    $items.appendChild(miNodo);
                }
            }

            function anyadirCarrito () {
                // Anyadimos el Nodo a nuestro carrito
                carrito.push(this.getAttribute('marcador'))
                // Calculo el total
                calcularTotal();
                // Renderizamos el carrito 
                renderizarCarrito();
            }

            function renderizarCarrito() {
                // Vaciamos todo el html
                $carrito.textContent = '';
                // Quitamos los duplicados
                let carritoSinDuplicados = [...new Set(carrito)];
                // Generamos los Nodos a partir de carrito
                carritoSinDuplicados.forEach(function (item, indice) {
                    // Obtenemos el item que necesitamos de la variable base de datos
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    // Cuenta el número de veces que se repite el producto
                    let numeroUnidadesItem = carrito.reduce(function (total, itemId) {
                        return itemId === item ? total += 1 : total;
                    }, 0);
                    // Creamos el nodo del item del carrito
                    let miNodo = document.createElement('li');
                    miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
                    miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0]['nombre']} - ${miItem[0]['precio']}pesos`;
                    // Boton de borrar
                    let miBoton = document.createElement('button');
                    miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                    miBoton.textContent = 'X';
                    miBoton.style.marginLeft = '1rem';
                    miBoton.setAttribute('item', item);
                    miBoton.addEventListener('click', borrarItemCarrito);
                    // Mezclamos nodos
                    miNodo.appendChild(miBoton);
                    $carrito.appendChild(miNodo);
                })
            }

            function borrarItemCarrito() {
                console.log()
                // Obtenemos el producto ID que hay en el boton pulsado
                let id = this.getAttribute('item');
                // Borramos todos los productos
                carrito = carrito.filter(function (carritoId) {
                    return carritoId !== id;
                });
                // volvemos a renderizar
                renderizarCarrito();
                // Calculamos de nuevo el precio
                calcularTotal();
            }

            function calcularTotal() {
                // Limpiamos precio anterior
                total = 0;
                // Recorremos el array del carrito
                for (let item of carrito) {
                    // De cada elemento obtenemos su precio
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    total = total + miItem[0]['precio'];
                }
                // Formateamos el total para que solo tenga dos decimales
                let totalDosDecimales = total.toFixed(2);
                // Renderizamos el precio en el HTML
                $total.textContent = totalDosDecimales;
            }

            function vaciarCarrito() {
                // Limpiamos los productos guardados
                carrito = [];
                // Renderizamos los cambios
                renderizarCarrito();
                calcularTotal();
            }

            // Eventos
            $botonVaciar.addEventListener('click', vaciarCarrito);

            // Inicio
            renderItems();
        } 
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-8 row"></main>
            <!-- Carrito -->
            <aside class="col-sm-4">
                <h2>Orden</h2>
                <!-- Elementos del carrito -->
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
 <p class="text-right">Total: <span id="total"></span>pesos;</p>
<button id="boton-vaciar" class="btn btn-danger">Cancelar pedido</button>  <a class="nav-link" href="orden.php"><button  name="submit"  class="btn btn-danger">Registrar pedido</button></a>
  </li>
          
        </div>
            </aside>
        </div>
    </div>
</body>
</html>
<?php
ob_end_flush();
?>