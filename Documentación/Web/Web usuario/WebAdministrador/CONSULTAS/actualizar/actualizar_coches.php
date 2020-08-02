
       
<header>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</header>

<body style="margin-left:1%;">

<h1>Modificar Vehiculo</h1>

<form id="form1" method="post" action="">
        Pon el id del vehiculo: <input type="text" name="id"><br><br>
        <input type="submit" name="boton" value="Consultar"><br>
</form>


<?php
        if ((isset($_POST['boton'])) && ($_POST['boton'] == 'Consultar')){

                include("conexion.php");
                $id = $_POST['id'];

                $sentencia = "select * from coches where id=$id";
                $consulta = mysqli_query($conexion, $sentencia)
                or die("Error de Consulta");

                if ($fila = mysqli_fetch_array($consulta)){

                    $id = $fila['id'];
                    $marca = $fila['marca'];
                    $modelo = $fila['modelo'];
                    $combustible = $fila['combustible'];
                    $kilometros = $fila['kilometros'];
                    $puertas = $fila['puertas'];
                    $cv = $fila['cv'];
                    $precio = $fila['precio'];
                    $descripcion = $fila['descripcion'];
                    

                echo "<form id='form2' action='' method='post'>";
                echo "ID:
                <input type='text' value='$id' name='id'
                readonly><br>";
                echo "Marca:
                <input type='text' value='$marca' name='marca'><br>";
                echo "Modelo:
                <input type='text' value='$modelo' name='modelo'><br>";
                echo "Tipo:
                <input type='text' value='$combustible' name='combustible'><br>";
                echo "Kilometros:
                <input type='text' value='$kilometros' name='kilometros'><br>";
                echo "Puertas:
                <input type='text' value='$puertas' name='puertas'><br>";
                echo "Cilindrada:
                <input type='text' value='$cv' name='cv'><br>";
                echo "Precio:
                 <input type='text' value='$precio' name='precio'><br>";
                echo "Descripcion:
                <input type='text' value='$descripcion' name='descripcion'><br><br>";
                echo "Foto: <input type='file' name='archivo' /><br><br>";
                echo "<input type='submit' name='boton' value='Actualizar'><br>";
                echo "</form>";
                  
        }
    }
        if ((isset($_POST['boton'])) && ($_POST['boton'] == 'Actualizar')){
                
                    $id = $_POST['id'];
                    $marca = $_POST['marca'];
                    $modelo = $_POST['modelo'];
                    $combustible = $_POST['combustible'];
                    $kilometros = $_POST['kilometros'];
                    $puertas = $_POST['puertas'];
                    $cv = $_POST['cv'];
                    $precio = $_POST['precio'];
                    $descripcion = $_POST['descripcion'];
                   

                include("conexion.php");

                $sentencia = "UPDATE coches SET marca='$marca',
                modelo='$modelo', combustible='$combustible', kilometros=$kilometros, puertas=$puertas, cv=$cv, precio=$precio,
                descripcion='$descripcion' where id=$id";

                $consulta = mysqli_query($conexion, $sentencia)
                or die("Error de Consulta");

                echo "Registro ha sido actualizado con exito<br>";
                include("desconexion.php");


                //aqui es donde añadimos la imagen
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

                    mysqli_free_result($consulta);
                    include("desconexion.php");
                }
        
?>
</body>