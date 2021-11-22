<?php 
include("../../php/conexion.php");
$inventario = "SELECT * FROM lote";

$busqueda = $_GET['buscar'];

$consulta = ("SELECT * FROM lote WHERE 
`ID_Lote` LIKE '%$busqueda%' ");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/estilos.css">
    
    <link rel="stylesheet" href="../../css/fontello.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap" rel = "estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>    
<div class="contenedor">
    
    <h1 class="icon-pulpo">  Pulpo</h1>
    <input type="checkbox" id="menu-bar">
    <label class="icon-menu" for="menu-bar"></label>
    <nav class="menu">
        <a href="../inventario.php">inventario</a>
        <a href="#">Laboratorios</a>
        <a href="ingresarlote.php">Registrar lote</a>
        <a href="#">Registrar presentacion</a>
        <a href="#">Registrar tipos  de productos</a>
        <a href="../../php/cerrarsesion.php">cerrar sesion</a>
    </nav>
</div>
</header>

<br><br>
<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>

<table class="table  table-dark">
   
   
        <tr>
    
    <td>Id lote</td>
    <td>Fecha vencimiento</td>
    <td>ID proveedor</td>
    <td>Stock</td>
    <td>Operacion</td>
    </tr>
 
    
    <?php 
    $resultado = mysqli_query($conexion, $consulta);
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
   
    <td> <?php echo $row["ID_Lote"];  ?></td>
    <td> <?php echo $row["Fecha_vencimiento"];  ?></td>
    <td> <?php echo $row["provedorID"];  ?></td>
    <td> <?php echo $row["Stock"];  ?></td>
    <td> <a href="actualizarP.php?id=<?php echo $row["ID_Lote"];  ?>"> Editar</a>|
    <a href="procesoEliminar.php?id=<?php echo $row["ID_Lote"];  ?>" class="eliminar"> Eliminar</a>|</td>

    
    </tr> 
    <?php 
  
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 



    </div>
    </center>
</body>
</html>