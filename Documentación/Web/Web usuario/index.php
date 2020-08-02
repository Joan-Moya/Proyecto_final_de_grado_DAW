 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LuxuryMotors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/transitions.css"> 
    <link rel="stylesheet" href="css/estilosPersonales.css"> 
    <link rel="icon" type="image/png" href="images/logo.png">

</head>

<body>
   
     <!-- CONTAINER DE LOGIN/REGISTER, CORREO/TLF !-->
     <div class="container-fluid p-0 fixed-top col-12 fondoNegro">
                <div class="row border-bottom">
                <nav class="nav offset-sm-1 offset-1">
                        <a class="nav-link disabled" href="#!">
                            <i class="far fa-envelope-open pl-1 text-white"></i>
                            <span class="d-none d-sm-inline text-white p-1">JM@onlineshop.com</span>
                        </a>
                            
                        <a class="nav-link disabled" href="#!">
                            <i class="fas fa-phone pl-1 text-white"></i>
                            <span class="d-none d-sm-inline text-white p-1">+34 000000000</span>
                        </a>
                    </nav>

                    <nav class="nav offset-2 offset-sm-5">
                        <a class="nav-link text-white" href="registro.php">Entrar</a>
                        <a class="nav-link text-white" href="registro.php">Registrarse</a>
                    </nav>
                </div>
            </div>


    <!-- AQUI EMPIEZAN LOS LINKS DEL NAV !-->
<div class="container-fluid pt-1" style="margin-top: 50px; margin-left:2%;">
        <div class="row col-sm-12 ">
            <nav class="navbar navbar-expand-lg navbar-light text-left col-4 col-sm-3">
               
               <!--Este es el botón que saldrá en formato movil--> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#boton-desplegable" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="boton-desplegable">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="tienda.php" class="nav-link">Tienda</a></li>
                        <li class="nav-item"><a href="contactanos.html" class="nav-link">Contactanos</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
   
   
    <!-- AQUI EMPIEZA EL CONTAINER DEL CARROUSEL !-->
    <div class="container-fluid pt-2" >
        <div class="row">
           
            <!-- AQUI COMIENZAN LAS IMAGENES DEL SLIDER !-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/bgSlider2.jpg"  data-holder-rendered="true" alt="Imagen FullHD coche">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/bgSlider1.jpg" data-holder-rendered="true"  alt="Imagen FullHD coche">
                    </div>
                </div>
                
                <!--Botones para pasar de imagen -->
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>

            </div>
        </div>
    </div>

    <!-- AQUI EMPIEZA EL CONTAINER DE LAS IMAGENES DE DEBAJO DEL SLIDER -->
    <div class="container-fluid pt-5">
        <div class="row">
          
          <!--CREAMOS LA CONEXION PARA COGER LOS REGISTROS DE LAS TABLAS PARA EL STOCK-->
                      <?php
                            include("conexion.php");

                            //creamos las consultas en la base de datos
                            $sentencia_audi = "Select * from coches where marca= 'audi';";
                            $sentencia_porsche = "Select * from coches where marca= 'porsche';";
                            $sentencia_jaguar = "Select * from coches where marca= 'jaguar';";
                            $sentencia_mercedes = "Select * from coches where marca= 'mercedes';";
                             
                            //ejecutamos las consultas en la base de datos
                            $consulta_audi = mysqli_query($conexion, $sentencia_audi) or die("Error de Consulta");
                            $consulta_porsche = mysqli_query($conexion, $sentencia_porsche) or die("Error de Consulta");
                            $consulta_jaguar = mysqli_query($conexion, $sentencia_jaguar) or die("Error de Consulta");
                            $consulta_mercedes = mysqli_query($conexion, $sentencia_mercedes) or die("Error de Consulta");
                            
                            //aqui creamos variables para recoger el numero de registros en cada marca
                            $numeroCochesAudi = mysqli_num_rows($consulta_audi);
                            $numeroCochesPorsche = mysqli_num_rows($consulta_porsche);
                            $numeroCochesJaguar = mysqli_num_rows($consulta_jaguar);
                            $numeroCochesMercedes = mysqli_num_rows($consulta_mercedes);
                           
                            include("desconexion.php"); 
                        ?>
           
            <div class="col-12 col-sm-6 p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid" src="images/audi.jpg" alt="Seccion coches audi" style="height: 200px">
                <div class="card-img-overlay">
                    <h3>
                        <p class="card-text text-white text-center font-weight-bold pt-5"><a href="audi.php" class="text-white">Audi</a></p>
                    </h3>
                        <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesAudi; ?> en Stock</p>
                </div>
            </div>

           
           
            <div class="col-12 col-sm-6 p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid" src="images/porsche.jpg" alt="Seccion porsche" style="height: 200px">
                <div class="card-img-overlay">
                    <h3>
                  <p class="card-text text-white text-center font-weight-bold pt-5"><a href="porsche.php" class="text-white">Porsche</a></p>
                    </h3>
                    <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesPorsche; ?> en Stock</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid" src="images/jaguar.jpg" alt="Seccion emisoras" style="height: 200px">
                <div class="card-img-overlay">
                    <h3>
                  <p class="card-text text-white text-center font-weight-bold pt-5"><a href="jaguar.php" class="text-white">Jaguar</a></p>
                    </h3>
                    <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesJaguar; ?> en Stock</p>
                </div>
            </div>

            <div class="col-12 col-sm-6  p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid" src="images/mercedes.jpg" alt="Seccion baterias" style="height: 200px">
                <div class="card-img-overlay">
                    <h3>
                    <p class="card-text text-white text-center font-weight-bold pt-5"><a href="mercedes.php" class="text-white">Mercedes</a></p>
                    </h3>
                    <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesMercedes; ?> en Stock</p>
                </div>
            </div>
        </div>
    </div>

   <!-- ESTE ES EL CONTAINER DONDE ESTA LA INFORMACION -->
    <div class="container-fluid p-0">
        <div class="row pt-5">
            <div class="card ">
                <img class="card-img" src="images/drone.jpg" style="height: 500px;" alt="Fondo del texto">
                <div class="card-img-overlay">
                    <h1>
                        <p class="card-text text-white text-center pt-3">Quienes somos?</p>
                    </h1>
                        <p class="card-text text-white text-left pt-5 p-3">-Somos un catalogo online de compa-venta de coches de segunda mano o kilometro cero de alta gama, compramos tu coche tras un estudio y revisión del mimso sin coste para el vendendor. </p>
                        
                        <p class="card-text text-white text-left pt-4 p-3">-Puedes entrar en las diferentes secciones y verás los coches que tenemos en nuestro stock, también puedes filtrar la busqueda para así encontrar el coche que mejor se adapte a ti mucho mas rápido. </p>
                        
                        <p class="card-text text-white text-left pt-5 p-3  d-none d-sm-inline">-No encuentras el coche que quieres? puedes llamarnos o enviarnos un correo para que te notifiquemos cuando lo tengamos en nuestro taller para que puedas venir a verlo &nbsp;&nbsp;&nbsp;&nbsp;o directamente reservarlo, en un par de dias te lo puedes llevar, te ofrecemos un año de garantía con nuestro taller propio!!! </p>
                </div>
            </div>
        </div>
    </div>
    
   
        <!--Aqui empieza el video-->
        <div class="container-fluid p-0 pt-5">
            <div class="row">
                <div class="embed-responsive embed-responsive-16by9  col-sm-12 col-12 p-0 m-0"> 
                    <video width="100%" height="240px" loop autoplay muted>
                        <source src="images/video.mp4" type="video/mp4" alt="video de muestra">
                    </video>
                </div> 
            </div>
        </div>
        
        <!--Opiniones-->
        <div class="container-fluid">
            <div class="row pt-2">
                <h1 class="col-11">
                       <p class="font-weight-bold pt-5 offset-2 offset-sm-5 pb-sm-5">OPINIONES</p>
                   </h1>
            </div>
        </div>

   
    <!--AQUI EMPIEZA EL CARROUSEL DE OPINIONES DE CLIENTES-->
    <div class="container-fluid p-5">
        <div class="row">

            <!-- AQUI COMIENZAN LAS IMAGENES DEL SLIDER !-->
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row"> 
                           
                           <!--OPINION1-->
                            <div class="col-sm-1 col-12 ">
                                <img src="images/usr.jpg" class="rounded-circle" alt="imagenUsuario">
                            </div>
                            <div class="col-sm-3 ">
                               El trato ha sido genial, el taller muy profesional y el coche me lo han dado perfecto, limpio, con todas sus revisiones y también me ofrecen equipamiento extra.
                                <p><b>-Victor Gil</b></p>
                            </div>
                    
                        
                         <!--OPINION2-->
                            <div class="col-sm-1 col-12">
                                <img src="images/usr2.jpg" class="rounded-circle" alt="imagenUsuario">
                            </div>
                            <div class="col-sm-3">
                                La verdad es que este es el mejor catalogo de coches de alta gama que he encontrado, no solo por su diseño en internet sino por el trato de su gente a la hora de gestionar la compra y asesorarme, no han tenido ningún fallo y son muy cercanos.
                                <p><b>-Adrián Fos</b></p>
                            </div>
                        
                        
                        <!--OPINION3-->
                            <div class="col-sm-1 col-12">
                                <img src="images/usr3.jpg" class="rounded-circle" alt="imagenUsuario">
                            </div>
                            <div class="col-sm-3">
                               Muy contenta con sus servicios, el coche funciona genial y a la hora de probar y enseñarme los coches en persona no han tenido ningún problema, quise un modelo en especifico y nada más tenerlo me llamaron para reservarmelo y pasase a verlo cuando estuviera revisado.
                               <p><b>-Angela Moreno</b></p>
                            </div>
                                </div>    
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
 
    <!--AQUI COMIENZA EL FOOTER -->
            <footer class="page-footer font-small text-white fondoNegro">
                <div class="container text-center text-md-left">
                    <div class="row">

                        <div class="col-md-4 mx-auto">
                            <img src="images/logo.png" class="pt-4 img-fluid d-none d-sm-inline">
                            <p class="text-muted col-4">JM SHOP</p>

                            <!-- Social buttons -->
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-fb mx-1">
                                        <i class="fab fa-facebook-f"> </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-tw mx-1">
                                        <i class="fab fa-twitter"> </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-gplus mx-1">
                                        <i class="fab fa-google-plus-g"> </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-li mx-1">
                                        <i class="fab fa-linkedin-in"> </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-dribbble mx-1">
                                        <i class="fab fa-dribbble"> </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-4 mx-auto">
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">
                                Como puedo comprar?
                            </h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a>-Envíanos un correo con tu teléfono </a>
                                </li>
                                <li>
                                    <a>-Llámanos a nuestro contacto </a>
                                </li>
                            </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-2 mx-auto">
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Marcas mas vendidas</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a>Mercedes</a>
                                </li>
                                <li>
                                    <a>Jaguar</a>
                                </li>
                                <li>
                                    <a>Audi</a>
                                </li>
                                <li>
                                    <a>Porsche</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                    </div>
                </div>
                    <!-- Copyright -->
                    <div class="text-muted text-center">JOAN MOYA TORREMOCHA TEMPLATE © 2019 . Privacy Policy
                </div>
         </footer>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



</body>

</html>
