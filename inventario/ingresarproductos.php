<?php   

include("../php/conexion.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>registrar Producto</title>
 
</head>
<body>
<header>    
<div class="contenedor">
    
    <h1 class="icon-pulpo">  Pulpo</h1>
    <input type="checkbox" id="menu-bar">
    <label class="icon-menu" for="menu-bar"></label>
    <nav class="menu">
        <a href="inventario.php">inventario</a>
        <a href="inventario.php">Laboratorios</a>
        <a href="lote/ingresarlote.php">Registrar lote</a>
        <a href="#">Registrar presentacion</a>
        <a href="#">Registrar clases de productos</a>
        <a href="../php/cerrarsesion.php">cerrar sesion</a>
    </nav>
</div>
</header>


<center>   
<form action="scriptP.php" method="POST">
<br><br><br><br><br>
    <h2>Producto</h2>

    

    <label for="">Nombre del Producto</label><br>   
    <input type="text" name="Nombre_Producto" placeholder=""><br><br>

    <label for="">Precio de Entrada</label><br>   
    <input type="text" name="Precio_Entrada" placeholder=""><br><br>

    <label for="">Precio de las cajas</label><br>   
    <input type="text" name="Precio_Cajas" placeholder=""><br><br>
    
    <label for="">Precio del blister </label><br>   
    <input type="text" name="Precio_Blister" placeholder=""><br><br>
    
    <label for="">Precio unidad</label><br>   
    <input type="text" name="Precio_Unidad" placeholder=""><br><br>

    <label for="">Concentracion</label><br>   
    <input type="text" name="concentracion" placeholder=""><br><br>

    <label for="">Tipo De Producto</label><br>
<?php                               
$query_tipo = mysqli_query($conexion,"SELECT * FROM tipo");
$result_tipo = mysqli_num_rows($query_tipo);

?>
    <Select name="tipoProducto" id="tipoProducto">
      <?php
            if($result_tipo > 0){

while ($tipo = mysqli_fetch_array($query_tipo)){
    

?>
<option value="<?php echo $tipo["ID_Tipo"];?>"><?php echo $tipo["Nombre_Tipo"];?></option>

<?php
}

            }
            ?>
    </Select><br><br>
     
    <label for="">Laboratorio</label><br>
<?php                               
$query_laboratorio = mysqli_query($conexion,"SELECT * FROM laboratorio");
$result_laboratorio = mysqli_num_rows($query_laboratorio);

?>
    <Select name="laboratorio" id="laboratorio">
      <?php
            if($result_laboratorio > 0){

while ($laboratorio = mysqli_fetch_array($query_laboratorio)){
    

?>
<option value="<?php echo $laboratorio["ID_Laboratorio"];?>"><?php echo $laboratorio["Nombre_Laboratorio"];?></option>

<?php
}

            }
            ?>
    </Select><br><br>

    <label for="">Presentacion</label><br>
<?php                               
$query_presentacion = mysqli_query($conexion,"SELECT * FROM presentacion");
$result_presentacion = mysqli_num_rows($query_presentacion);

?>
    <Select name="presentacion" id="presentacion">
      <?php
            if($result_presentacion > 0){

while ($presentacion = mysqli_fetch_array($query_presentacion)){
    

?>
<option value="<?php echo $presentacion["ID_Presentacion"];?>"><?php echo $presentacion["Nombre_Presentacion"];?></option>

<?php
}

            }
            ?>
    </Select><br><br>

  







   

    <input type="submit">
    
</form>

</center>


</body>
</html>

