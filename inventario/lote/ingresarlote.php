<?php 
include("../../php/conexion.php");
$consulta = "SELECT * FROM lote";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
    <title>registrar Producto</title>
 
</head>
<body>
<header>    
<div class="contenedor">
    
    <h1 class="icon-pulpo">  Pulpo</h1>
    <input type="checkbox" id="menu-bar">
    <label class="icon-menu" for="menu-bar"></label>
    <nav class="menu">
        <a href="../inventario.php">inventario</a>
        <a href="">Laboratorios</a>
        <a href="#">Registrar lote</a>
        <a href="#">Registrar presentacion</a>
        <a href="#">Registrar tipos de productos</a>
        <a href="../../php/cerrarsesion.php">cerrar sesion</a>
    </nav>
</div>
</header>
<center>
    <form action="ScriptLote.php" method="POST">
        <br><br><br><h2>Lote</h2>    
        <label for="">Fecha vencimiento</label><br>   
        <input type="date" name="Fecha_vencimiento" placeholder=""><br><br>
    
        <label for=""> Proveedor</label><br>
<?php                               
$query_prove = mysqli_query($conexion,"SELECT * FROM provedor");
$result_prove = mysqli_num_rows($query_prove);

?>
    <Select name="provedorID" id="provedorID">
      <?php
            if($result_prove > 0){

while ($prove = mysqli_fetch_array($query_prove)){
    

?>
<option value="<?php echo $prove["NiT_provedor"];?>"><?php echo $prove["Nombre"];?></option>

<?php
}

            }
            ?>
    </Select><br><br>
    
        <label for="">Stock</label><br>   
        <input type="number" name="Stock" placeholder=""><br><br>
       

        <label for="">Codigo producto</label><br>
<?php                               
$query_produc = mysqli_query($conexion,"SELECT * FROM producto");
$result_produc = mysqli_num_rows($query_produc);

?>
    <Select name="productoid" id="productoid">
      <?php
            if($result_produc > 0){

while ($produc = mysqli_fetch_array($query_produc)){
    

?>
<option value="<?php echo $produc["Codigo_Producto"];?>"><?php echo $produc["Nombre_Producto"];?></option>

<?php
}
            }
    
    ?>
    
    <input type="submit">

</form>
</center>


<center>
<form action="buscar.php" method="get">

<input type="text" name="buscar" id="buscar" placeholder="buscar" >
<input type="submit" value="buscar"> 
</form>
<table class="table table-hover table-dark">
   
   
        <tr>
    
    <td>Id lote</td>
    <td>Fecha vencimiento</td>
    <td>ID proveedor</td>
    <td>Stock</td>
    <td>Id producto</td>
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
    <td> <?php echo $row["IdProducto"];  ?></td>
    <td> <a href="actualizarL.php?id=<?php echo $row["ID_Lote"];  ?>"> Editar</a>|
    <a href="procesoEliminar.php?id=<?php echo $row["ID_Lote"];  ?>" class="eliminar"> Eliminar</a>|</td>

    
    </tr> 
    </center>
    <?php 
    
    } mysqli_free_result($resultado);
    ?>
</body>
</html>