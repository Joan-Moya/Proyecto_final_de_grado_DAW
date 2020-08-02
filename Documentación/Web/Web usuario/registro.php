<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosPersonales.css">
    <link rel="stylesheet" href="css/transitions.css">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>

<body>

   
    <!-- CONTAINER DE LOGIN/REGISTER, CORREO/TLF !-->
    <div class="container-fluid p-0 fixed-top fondoNegro">
        <div class="row border-bottom">
           <nav class="nav  offset-sm-1 ">
                <a class="nav-link text-white" href="index.php">
                    <i class="fas fa-home pl-3"></i>
                    <span class="d-none d-sm-inline p-1">Inicio</span>
                </a>
            </nav>
        </div>
    </div>
    
    <!--AQUI EMPIEZA LA IMAGEN DONDE ESTA EL LOGIN-->
    <div class="container-fluid p-0  fondoNegro">
        <div class="row pt-2">
            <div class="card col-sm-12 col-12 p-0">
               
               
                <img class="card-img img-fluid mx-auto imagen800"  alt="imagen de fondo" src="images/black.jpg">
                
                <div class="card-img-overlay">
                    <h1>
                        <p class="card-text text-white text-center pt-5">Registro</p>
                    </h1>
            
                   <!-- AQUI HACEMOS EL LOGIN PARA ENTRAR A ADMINISTRADOR-->
                       
                    <center>
                        <FORM ACTION="control.php" METHOD="POST" style="color:white; margin-top:5%;">
                             <input class="col-6" type="text" name="usuario" placeholder="Usuario" style="width:25%; background:transparent; border:1px white solid; color:white;"><br>
                             <input class="col-6" type="password" name="pass" placeholder="Contraseña" style="width:25%; background:transparent; border:1px white solid; color:white; margin-top:1%;"><br>
                            <input type="submit" value="Acceso" style="margin-top:3%; margin-bottom:5%; border:0px; background-color:#28A645;">
                        </FORM>
                    </center>
                        

                    <?php
                     if(isset($_GET['errorusuario'])){
                            echo "
                            <center>
                                <span> 
                                    <span class='hatch' style='color:red;'>Usuario y contraseña erroneos</span><br>
                                    <img src='images/error.png' style='width:50px; height:50px;'>
                                </span> 
                            </center>";
                        }else{
                            
                        }
                    ?>


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
                                Where can I get some?
                            </h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a>-Simply dummy text of the printing </a>
                                </li>
                                <li>
                                    <a>-Electronic typesetting, remaining </a>
                                </li>
                            </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-2 mx-auto">
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">USEFUL LINKS</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a>FPV</a>
                                </li>
                                <li>
                                    <a>Drones</a>
                                </li>
                                <li>
                                    <a>WhiteShark</a>
                                </li>
                                <li>
                                    <a>Banggood</a>
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
    <script>
    $(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>


</body>

</html>
