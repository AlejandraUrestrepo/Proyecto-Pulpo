<?php 
include("../php/conexion.php");

/**Recibir datos y almacenar en variables */
$codigoProducto = $_POST['Codigo_Producto'];
$nombreProducto = $_POST['Nombre_Producto'];
$precioEntrada = $_POST['Precio_Entrada'];
$precioCajas = $_POST['Precio_Caja'];
$precioBlister = $_POST['Precio_Blister'];
$precioUnidad = $_POST['Precio_Unidad'];
$concentracion = $_POST['concentracion'];
$tipoProducto = $_POST['tipoProducto'];
$laboratorio= $_POST['laboratorio'];
$presentacion = $_POST['presentacion'];




/// actualizar datos


$actualizar = "UPDATE producto SET Codigo_Producto=$codigoProducto, Nombre_Producto = '$nombreProducto', Precio_Entrada = $precioEntrada,
 Precio_Caja = '$precioCajas', Precio_Blister = '$precioBlister', Precio_Unidad = '$precioUnidad', concentracion = '$concentracion',
 TipoID = '$tipoProducto', LaboratorioID = '$laboratorio', PresentacionID = '$presentacion'  WHERE Codigo_Producto = '$codigoProducto'";


//**Ejecutar consulta */

$resultado = mysqli_query($conexion, $actualizar);



if(!$resultado){
  echo 'error en la consulta';
}
else{
    echo "
    <script>
    alert('se ha sido actualizado exitosamente');
    window.location='inventario.php';
    </script>
    ";
}
//**Cerrar conexion */
mysqli_close($conexion);
?>