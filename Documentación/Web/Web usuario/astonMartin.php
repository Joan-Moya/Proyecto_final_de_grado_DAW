<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Coches Aston Martin</title>
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
    
    
    <!--Aqui empieza el video-->
        <div class="container-fluid p-0">
            <div class="row">
                <div class="embed-responsive embed-responsive-16by9  col-sm-12 col-12 p-0 m-0"> 
                    <video width="100%" height="240px" loop autoplay muted>
                        <source src="images/astonVideo.mp4" type="video/mp4" alt="video de muestra">
                    </video>
                </div> 
            </div>
        </div>
    
    

   <!-- BARRA QUE NOS DICE DONDE ESTAMOS -->
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-dark">Inicio</a></li>
                <li class="breadcrumb-item"><a href="tienda.php" class="text-dark">Tienda</a></li>
                <li class="breadcrumb-item"><a href="astonMartin.php" class="text-dark">Aston Martin</a></li>
            </ol>
    </nav>
        
      <!--FILTROS-->
        <!--DESPLEGABLE CON LOS PRECIOS-->
        <div class="container-fluid p-0 ">
            <nav class="navbar navbar-expand-sm navbar-dark fondoNegro justify-content-center">
            
            <div class="dropdown open m-1">
                  <button class="btn btn-secondary dropdown-toggle"
                          type="button" id="dropdownMenu4" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                    Ordenar por
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item-text" href="astonMartin.php?ord=barato">+Barato</a>
                    <a class="dropdown-item" href="astonMartin.php?ord=caro">+Caro</a>
                  </div>
            </div>
            
            <!--DESPLEGABLE CON LOS CV-->
            <div class="dropdown open m-1">
                  <button class="btn btn-secondary dropdown-toggle"
                          type="button" id="dropdownMenu4" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                    Potencia
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="astonMartin.php?cv=120">+120 CV</a>
                    <a class="dropdown-item"  href="astonMartin.php?cv=150">+150 CV</a>
                    <a class="dropdown-item"  href="astonMartin.php?cv=200">+200 CV</a>
                  </div>
            </div>
            
            <!--DESPLEGABLE CON LOS KM-->
            <div class="dropdown open m-1">
                  <button class="btn btn-secondary dropdown-toggle"
                          type="button" id="dropdownMenu4" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                    Km
                  </button>
                  <div class="dropdown-menu m-1">
                    <a class="dropdown-item-text" href="aston martin.php?km=0">KM 0</a>
                    <a class="dropdown-item" href="astonMartin.php?km=20000">+ 20.000</a>
                    <a class="dropdown-item" href="astonMartin.php?km=50000">+ 50.000</a>
                    <a class="dropdown-item" href="astonMartin.php?km=100000">+ 100.000</a>
                  </div>
            </div>
            
            <!--DESPLEGABLE CON EL NUMERO DE PUERTAS-->
            <div class="dropdown open">
                  <button class="btn btn-secondary dropdown-toggle"
                          type="button" id="dropdownMenu4" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                    Puertas
                  </button>
                  <div class="dropdown-menu m-1">
                    <a class="dropdown-item-text" href="astonMartin.php?puertas=2">2</a>
                    <a class="dropdown-item" href="astonMartin.php?puertas=4">4</a>
                    <a class="dropdown-item" href="astonMartin.php?puertas=>4">+4</a>
                  </div>
            </div>
            
            <!--DESPLEGABLE CON EL TIPO DE COMBUSTIBLE-->
            <div class="dropdown open m-1">
                  <button class="btn btn-secondary dropdown-toggle"
                          type="button" id="dropdownMenu4" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                    Combustible
                  </button>
                  <div class="dropdown-menu m-1">
                    <a class="dropdown-item-text" href="astonMartin.php?combustible=diesel">Diesel</a>
                    <a class="dropdown-item" href="astonMartin.php?combustible=gasolina">Gasolina</a>
                    <a class="dropdown-item" href="astonMartin.php?combustible=electrico">Eléctrico</a>
                    <a class="dropdown-item" href="astonMartin.php?combustible=hibrido">Hibrido</a>
                  </div>
            </div>
        </nav>
    </div>
     

    <!-- AQUI EMPIEZAN LAS IMAGENES DE LOS COCHES-->
    <div class="container-fluid  pt-4">
        <div class="row col-sm-12 d-flex justify-content-center">
           
        <?php
            
            
            include("conexion.php");
            
            //AQUI PONEMOS EL ORDEN POR PRECIO
            if(isset($_GET["ord"])&&($_GET["ord"]=="caro")){
                $sentencia = "Select * from coches where marca='aston martin' order by precio desc";

            }else if(isset($_GET["ord"])&&($_GET["ord"]=="barato")){
                $sentencia = "Select * from coches where marca='aston martin' order by precio asc";

            }
            //AQUI PONEMOS EL ORDEN POR CV
            else if(isset($_GET["cv"])&&($_GET["cv"]=="120")){
                $sentencia = "select * from coches where cv>120 and marca='aston martin'";

            }else if(isset($_GET["ord"])&&($_GET["ord"]=="150")){
                $sentencia = "select * from coches where cv>150 and marca='aston martin'";

            }else if(isset($_GET["ord"])&&($_GET["ord"]=="200")){
                $sentencia = "select * from coches where cv>200 and marca='aston martin'";

            }
            //AQUI PONEMOS EL ORDEN POR KM
            else if(isset($_GET["km"])&&($_GET["km"]=="0")){
                $sentencia = "select * from coches where kilometros = 0 and marca='aston martin'";

            }else if(isset($_GET["km"])&&($_GET["km"]=="20000")){
                $sentencia = "select * from coches where kilometros >=20000 and marca='aston martin'";

            }else if(isset($_GET["km"])&&($_GET["km"]=="50000")){
                $sentencia = "select * from coches where kilometros >= 50000 and marca='aston martin'";

            }else if(isset($_GET["km"])&&($_GET["km"]=="100000")){
                $sentencia = "select * from coches where kilometros >= 100000 and marca='aston martin'";

            }
            //AQUI PONEMOS EL ORDEN POR PUERTAS 
            else if(isset($_GET["puertas"])&&($_GET["puertas"]=="2")){
                $sentencia = "select * from coches where puertas = 2 and marca='aston martin'";

            }else if(isset($_GET["puertas"])&&($_GET["puertas"]=="4")){
                $sentencia = "select * from coches where puertas = 4 and marca='aston martin'";

            }else if(isset($_GET["puertas"])&&($_GET["puertas"]==">4")){
                $sentencia = "select * from coches where puertas >4 and marca='aston martin'";

            }
            //AQUI PONEMOS EL ORDEN POR COMBUSTIBLE
            else if(isset($_GET["combustible"])&&($_GET["combustible"]=="diesel")){
                $sentencia = "select * from coches where combustible = 'diesel' and marca='aston martin'";

            }else if(isset($_GET["combustible"])&&($_GET["combustible"]=="gasolina")){
                $sentencia = "select * from coches where combustible = 'gasolina' and marca='aston martin'";

            }else if(isset($_GET["combustible"])&&($_GET["combustible"]=="electrico")){
                $sentencia = "select * from coches where combustible = 'electrico' and marca='aston martin'";

            }else if(isset($_GET["combustible"])&&($_GET["combustible"]=="hibrido")){
                $sentencia = "select * from coches where combustible = 'hibrido' and marca='aston martin'";
            
            }else{
                $sentencia = "Select * from coches where marca='aston martin'";
            }
    
            $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

            //mientras haya dato en el resultado lo vuelca en fila
            while($fila= mysqli_fetch_array($consulta)){
                $id=$fila['id'];
                $marca=$fila['marca'];
                $modelo=$fila['modelo'];
                $combustible=$fila['combustible'];
                $kilometros=$fila['kilometros'];
                $puertas=$fila['puertas'];
                $cv=$fila['cv'];
                $precio=$fila['precio'];
                $descripcion=$fila['descripcion'];

                if(file_exists("WebAdministrador/fotosCoches/".$id.".jpg")){
                    $foto = "WebAdministrador/fotosCoches/".$id.".jpg";
                }else if(file_exists("WebAdministrador/fotosCoches/".$id.".png")){
                    $foto = "WebAdministrador/fotosCoches/".$id.".png";
                }else{
                    $foto = "WebAdministrador/fotosCoches/imagenGenerica.jpg";
                }

        ?>

        <!--PRODUCTO -->
        <div class="col-sm-6 col-md-4 col-12 border shadow p-3 mb-5 bg-white rounded m-2 hatch">
                <div class="thumbnail">
                  <img src="<?php echo $foto; ?>" class="p-3 img-fluid" alt="foto motor" style="height:250px;">
                  <div class="caption">
                    <h3><?php echo $marca." ".$modelo;?></h3>
                      <p><b>Descripción: </b><?php echo $descripcion;?></p>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Combustible</th>
                            <th class="d-none d-md-block">Kilometros</th>
                            <th>Puertas</th>
                            <th>Cv</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td scope="row"><?php echo $combustible;?></td>
                            <td class="d-none d-md-block"><?php echo $kilometros;?></td>
                            <td><?php echo $puertas;?></td>
                            <td><?php echo $cv;?></td>
                            </tr>
                        </tbody>
                    </table>
    
                    <p style="color:green;"><?php echo number_format($precio,2,",",".");?> €</p>
                      <button type="button" class="btn btn-primary" data-container="body"
                      data-toggle="popover" data-placement="bottom"
                      data-content="Puedes añadirlo al carrito o reservarlo">
                          Llamar
                      </button>
                      
                  </div>
                </div>
              </div>
              <?php
                }
                ?>
        </div>   
</div>

    

    <div class="container-fluid">
        <div class="row col-12 offset-sm-5 offset-2">
            <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#!" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#!" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
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
    <script>
        $(function(){
            $('[data-toggle="popover"]').popover()
        });
    </script>


</body>
</html>
