<style>
    a{
        text-decoration: none;
        color:red;
        font-family:sans-serif;
        font-size: 20px;
    }
    
    body{
        font-family: sans-serif;
    }
</style>
  
  
<header>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</header>

<body style="margin-left:1%;">

<h1>Eliminar Vehiculo</h1>

<form action="" name="formulario" method="post">

    Pon el id del coche <input type="text" name="id"><br><br>

    <input type="submit" value="Eliminar" name="boton">

</form>


<?php
        if (isset($_POST['boton'])){
        include("conexion.php");
        $ID = $_POST['id'];

        $sentencia = "delete from coches where id=$ID";

        $consulta = mysqli_query($conexion, $sentencia)
        or die("Error de Consulta");
        if (mysqli_affected_rows($conexion)!=0) {
        echo "El registro ha sido eliminado con exito<br>";
        }
        include("desconexion.php");
        }
?>


</body>