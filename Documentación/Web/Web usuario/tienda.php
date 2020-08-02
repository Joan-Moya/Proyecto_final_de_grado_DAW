<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
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
    
    
    
    <div class="container-fluid pt-5">
        <div class="row">
            <h1 class="col-12">
                   <p class="font-weight-bold pt-5 offset-3 offset-sm-5 pb-sm-5">SECCIONES</p>
               </h1>
        </div>
    </div>

    <!-- BARRA QUE NOS DICE DONDE ESTAMOS -->
    <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-dark">Inicio</a></li>
                <li class="breadcrumb-item"><a href="tienda.php" class="text-dark">Tienda</a></li>
            </ol> 
    </nav>


     <!-- AQUI EMPIEZA LA PRIMERA FILA DE LAS IMAGENES-->


     <!--VAMOS A CREAR LA CONEXIÓN CON LA BASE DE DATOS PARA RECOGER LOS PRODUCTOS QUE TENEMOS EN STOCK DE CADA SECCIÓN-->

                         <?php
                            include("conexion.php");

                            //creamos las consultas en la base de datos
                            $sentencia_audi = "Select * from coches where marca= 'audi';";
                            $sentencia_porsche = "Select * from coches where marca= 'porsche';";
                            $sentencia_jaguar = "Select * from coches where marca= 'jaguar';";
                            $sentencia_mercedes = "Select * from coches where marca= 'mercedes';";
                            $sentencia_bmw = "Select * from coches where marca= 'bmw';";
                            $sentencia_astonMartin = "Select * from coches where marca= 'aston martin';";
                            $sentencia_tesla = "Select * from coches where marca= 'tesla';";
                            $sentencia_lexus = "Select * from coches where marca= 'lexus';";
                            

                            //ejecutamos las consultas en la base de datos
                            $consulta_audi = mysqli_query($conexion, $sentencia_audi) or die("Error de Consulta");
                            $consulta_porsche = mysqli_query($conexion, $sentencia_porsche) or die("Error de Consulta");
                            $consulta_jaguar = mysqli_query($conexion, $sentencia_jaguar) or die("Error de Consulta");
                            $consulta_mercedes = mysqli_query($conexion, $sentencia_mercedes) or die("Error de Consulta");
                            $consulta_bmw = mysqli_query($conexion, $sentencia_bmw) or die("Error de Consulta");
                            $consulta_astonMartin = mysqli_query($conexion, $sentencia_astonMartin) or die("Error de Consulta");
                            $consulta_tesla= mysqli_query($conexion, $sentencia_tesla) or die("Error de Consulta");
                            $consulta_lexus= mysqli_query($conexion, $sentencia_lexus) or die("Error de Consulta");

                            //aqui creamos variables para recoger el numero de registros en cada marca
                            $numeroCochesAudi = mysqli_num_rows($consulta_audi);
                            $numeroCochesPorsche = mysqli_num_rows($consulta_porsche);
                            $numeroCochesJaguar = mysqli_num_rows($consulta_jaguar);
                            $numeroCochesMercedes = mysqli_num_rows($consulta_mercedes);
                            $numeroCochesBmw = mysqli_num_rows($consulta_bmw);
                            $numeroCochesAstonMartin = mysqli_num_rows($consulta_astonMartin);
                            $numeroCochesTesla = mysqli_num_rows($consulta_tesla);
                            $numeroCochesLexus = mysqli_num_rows($consulta_lexus);

                            include("desconexion.php"); 
                        ?>

     <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-12 col-sm-6 p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid pullUp" src="images/audi.jpg" alt=" imagen seccion Audi" style="height: 200px">
                <div class="card-img-overlay">
                    <h3>
                        <p class="card-text text-white text-center font-weight-bold pt-5"><a href="audi.php" class="text-white">Audi</a></p>
                    </h3>
                        <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesAudi; ?> en Stock</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid pullUp" src="images/porsche.jpg"  style="height: 200px" alt=" imagen seccion porsche">
                <div class="card-img-overlay">
                    <h3>
                        <p class="card-text text-white text-center font-weight-bold pt-5"><a href="porsche.php" class="text-white">Porsche</a></p>
                    </h3>
                    <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesPorsche; ?> en Stock</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid pullUp" src="images/jaguar.jpg" style="height: 200px">
                <div class="card-img-overlay">
                    <h3>
                      <p class="card-text text-white text-center font-weight-bold pt-5"><a href="jaguar.php" class="text-white">Jaguar</a></p>
                    </h3>
                    <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesJaguar; ?> en Stock</p>
                </div>
            </div>

            <div class="col-12 col-sm-6  p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid pullUp" src="images/mercedes.jpg" style="height: 200px" alt=" imagen seccion mercedes">
                <div class="card-img-overlay">
                    <h3>
                    <p class="card-text text-white text-center font-weight-bold pt-5"><a href="mercedes.php" class="text-white">Mercedes</a></p>
                    </h3>
                    <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesMercedes; ?> en Stock</p>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--Fila 2 marcas -->
    <div class="container-fluid pt-0 pb-5">
        <div class="row">
            <div class="col-12 col-sm-6 p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid pullUp" src="images/bmw.jpg" alt="Card image" style="height: 200px" alt=" imagen seccion bmw">
                <div class="card-img-overlay">
                    <h3>
                      <p class="card-text text-white text-center font-weight-bold pt-5"><a href="bmw.php" class="text-white">BMW</a></p>
                    </h3>
                   <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesBmw; ?> en Stock</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid pullUp" src="images/astonMartin.jpg" alt="Card image" style="height: 200px" alt=" imagen seccion Aston Martin">
                <div class="card-img-overlay">
                    <h3>
                    <p class="card-text text-white text-center font-weight-bold pt-5"><a href="astonMartin.php" class="text-white">Aston Martin</a></p>
                    </h3>
                    <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesAstonMartin; ?> en Stock</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid pullUp" src="images/tesla.jpg" alt="Card image" style="height: 200px" alt=" imagen seccion Tesla">
                <div class="card-img-overlay">
                    <h3>
                      <p class="card-text text-white text-center font-weight-bold pt-5"><a href="tesla.php" class="text-white">Tesla</a></p>
                    </h3>
                    <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesTesla; ?> en Stock</p>
                </div>
            </div>

            <div class="col-12 col-sm-6  p-sm-1 col-md-3 p-1 d-flex">
                <img class="card-img img-fluid pullUp" src="images/lexus.jpg" alt="Card image" style="height: 200px" alt=" imagen seccion Lexus">
                <div class="card-img-overlay">
                    <h3>
                      <p class="card-text text-white text-center font-weight-bold pt-5"><a href="lexus.php" class="text-white">Lexus</a></p>
                    </h3>
                    <p class="card-text text-white text-center pt-1 tossing"><?php echo $numeroCochesLexus; ?> en Stock</p>
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
