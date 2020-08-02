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

    table.tablaPersonalizada {
      border: 1px solid #000000;
      width: 100%;
      text-align: center;
      border-collapse: collapse;
    }
    table.tablaPersonalizada td, table.tablaPersonalizada th {
      border: 1px solid #AAAAAA;
      padding: 6px 7px;
    }
    table.tablaPersonalizada tbody td {
      font-size: 14px; 
    }
    table.tablaPersonalizada tr:nth-child(even) {
      background: #EAEAEA;
    }
    table.tablaPersonalizada thead {
      background: #000000;
      background: -moz-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
      background: -webkit-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
      background: linear-gradient(to bottom, #404040 0%, #191919 66%, #000000 100%);
    }
    table.tablaPersonalizada thead th {
      font-size: 19px;
      font-weight: bold;
      color: #FFFFFF;
      text-align: center;
      border-left: 0px solid #D0E4F5;
    }
    table.tablaPersonalizada thead th:first-child {
      border-left: none;
    }
</style>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<h1>COCHES DISPONIBLES</h1>

<a href="menu.php"> <i class="fas fa-arrow-left"></i> Volver</a><br>

<?php
        $marca=$_GET['marca'];
        include("conexion.php");
        $sentencia = "Select * from coches where marca='$marca';";

        $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

        // Muesta el número de registros del resultado de la consulta SQL 
        echo "<br>Coches disponibles: ".mysqli_num_rows($consulta);
        echo "<br><br>";

        // Almacenamos el resultado de la consulta en un array
        while($fila = mysqli_fetch_assoc($consulta)){
            $registros[] = $fila;
        }
         mysqli_free_result($consulta);

         

         include("desconexion.php");

         // Muestra resultado en forma de tabla
         echo "<table class='tablaPersonalizada'>";
         echo "<tr>";
         $cabecera = array("ID","Marca","Modelo","Combustible","Kilometros","Puertas","Cv","Precio","Descripción");
         foreach($cabecera as $dato){
            echo "<td><b>".$dato."</b></td>";
         }
         echo "</tr>";

         
         foreach($registros as $registro){
            
             echo "<tr>";
                foreach($registro as $dato){
                    
                    echo "<td>".$dato."</td>";
                }
            echo "</tr>";
         }

         echo "</table>";

        
        
?>