<?php
include("../seguridad.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Panel Administrador</title>
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
                <a class="nav-link text-red" href="../salir.php" style="color:red">Salir de administrador</a>
            </nav>
        </div>
    </div>
    
    
    <div class="container-fluid pt-4">
        <div class="row">
            <h1 class="col-12">
                   <p class="font-weight-bold pt-5 offset-1 offset-sm-4 pb-sm-1">PANEL DE ADMINISTRADOR</p>
               </h1>
        </div>
    </div>

    
   
        <!-- AQUI EMPIEZA EL PANEL PARA LA GESTIÓN DE DATOS DEL SERVIDOR -->
        
        <!--LISTADO DE COCHES <-->
        <div class="container-fluid pt-4">
                <div class="row">
                    
                <iframe style="width: 100%; height: 600px; border:0px;" src="CONSULTAS/menu.php">
                    
                </iframe>
                
            </div>
        </div>
        
        <!--ALTAS DE COCHES-->
        <div class="container-fluid pt-4">
                <div class="row">
                    
                <iframe style="width: 100%; height: 500px; border:0px;" src="CONSULTAS/altas/alta_coches.php">
                    
                </iframe>
                
            </div>
        </div>
        
        <!--BAJA DE COCHES-->
        <div class="container-fluid pt-4">
                <div class="row">
                    
                <iframe style="width: 100%; height: 200px; border:0px;" src="CONSULTAS/bajas/baja_coches.php">
                    
                </iframe>
                
            </div>
        </div>
        
         <!--ACTUALIZAR COCHES-->
        <div class="container-fluid pt-4">
                <div class="row">
                    
                <iframe style="width: 100%; height: 580px; border:0px;" src="CONSULTAS/actualizar/actualizar_coches.php">
                    
                </iframe>
                
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
