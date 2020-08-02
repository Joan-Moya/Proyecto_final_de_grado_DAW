<style>
     h1{
        font-family: arial;
     }
    a{
        text-decoration: none;
        color:red;
        font-family:sans-serif;
        font-size: 20px;
    }
    body{
        font-family: sans-serif;
    }
    form{
        justify-content: space-around;
    }
</style>
      
<header>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</header>
    
<body style="margin-left:1%;">
   
    <h1>Añadir coche</h1>   
   
    <form action="" name="formulario" method="post" enctype="multipart/form-data">

        ID <input type="text" name="id" style="margin-bottom:0.5%;"><br>
        Marca <input type="text" name="marca" style="margin-bottom:0.5%;"><br>
        Modelo <input type="text" name="modelo" style="margin-bottom:0.5%;"><br>
        Combustible <input type="text" name="combustible" style="margin-bottom:0.5%;"><br>
        Kilometros <input type="text" name="kilometros" style="margin-bottom:0.5%;"><br>
        Puertas <input type="text" name="puertas" style="margin-bottom:0.5%;"><br>
        Cv <input type="text" name="cv" style="margin-bottom:0.5%;"><br>
        Precio <input type="text" name="precio" style="margin-bottom:0.5%;"><br>
        Descripcion <input type="text" name="descripcion" style="margin-bottom:0.5%;"><br><br>
        <input type="file" name="archivo" /><br><br><!-- este boton es para subir la imagen-->

        <input type="submit" value="Insertar" name="boton">
    </form>

<?php
        if (isset($_POST['boton'])){
        include("conexion.php");
        $id = $_POST['id'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $combustible = $_POST['combustible'];
        $kilometros = $_POST['kilometros'];
        $puertas = $_POST['puertas'];
        $cv = $_POST['cv'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        $sentencia = "insert into coches values($id,'$marca',
        '$modelo','$combustible',$kilometros,$puertas,$cv,$precio,'$descripcion')";

        

        $consulta = mysqli_query($conexion, $sentencia)or die("Error de Consulta");

        if (mysqli_affected_rows($conexion)!=0) {
        echo "El registro ha sido insertado con exito<br>";
            

        if (( ($_FILES["archivo"]["type"] == "image/png") || ($_FILES["archivo"]["type"] == "image/jpeg")) &&($_FILES["archivo"]["size"] < 10000000)){

            if ($_FILES["archivo"]["error"] > 0){

                echo $_FILES["archivo"]["error"] . "";

            }else{

                if($_FILES["archivo"]["type"] == "image/png"){
                    $nomFichero=$id.".png";
                }else{
                    $nomFichero=$id.".jpg";
                }
                move_uploaded_file($_FILES["archivo"]["tmp_name"],"../../fotosCoches/" .$nomFichero);
                

                
            }
        }else{
                echo "Archivo no permitido";
            }



        }
        include("desconexion.php");
        }


?>


</body>