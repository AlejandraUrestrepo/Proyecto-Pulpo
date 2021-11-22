<?php 
include("../php/conexion.php");
$inventario = "SELECT * FROM producto";

$busqueda = $_GET['buscar'];

$consulta = ("SELECT * FROM producto WHERE 
`Nombre_Producto` LIKE '%$busqueda%' OR `concentracion` LIKE '%$busqueda%' ");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/estilos.css">
    
    <link rel="stylesheet" href="../css/fontello.css">
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
        <a href="../facturacion.php">Facturacion</a>
        <a href="inventario.php">Inventario</a>
        <a href="ingresarproductos.php">Ingresar Producto</a>
        <a href="php/cerrarsesion.php">cerrar sesion</a>
    </nav>
</div>
<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>

<table class="table table-hover table-dark">
   
   
        <tr>
    <td>Codigo del producto</td>
    <td>Nombre del producto</td>
    <td>Precio de entrada</td>
    <td>Precio de Cajas</td>
    <td>Precio de Blisters</td>
    <td>Precio de Unidades</td>
    <td>Concentracion</td>
    <td>Tipo Id</td>
    <td>LaboratorioID</td>
    <td>PresentacionID</td>
    <td>Operacion</td>
    </tr>
 
    
    <?php 
    $resultado = mysqli_query($conexion, $consulta);
 
    While ($row=Mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td> <?php echo $row["Codigo_Producto"];  ?> </td>
    <td> <?php echo $row["Nombre_Producto"];  ?></td>
    <td> <?php echo $row["Precio_Entrada"];  ?></td>
    <td> <?php echo $row["Precio_Caja"];  ?></td>
    <td> <?php echo $row["Precio_Blister"];  ?></td>
    <td> <?php echo $row["Precio_unidad"];  ?></td>
    <td> <?php echo $row["concentracion"];  ?></td>
    <td> <?php echo $row["TipoID"];  ?></td>
    <td> <?php echo $row["LaboratorioID"];  ?></td>
    <td> <?php echo $row["PresentacionID"];  ?></td>
    <td> <a href="actualizarP.php?id=<?php echo $row["Codigo_Producto"];  ?>"> Editar</a>|
    <a href="procesoEliminar.php?id=<?php echo $row["Codigo_Producto"];  ?>" class="eliminar"> Eliminar</a>|</td>

    
    </tr>
    <?php 
    
    
    } mysqli_free_result($resultado);
    ?>
    
    </table> 



    </div>
</body>
</html>