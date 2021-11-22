<?php 

include '../php/conexion.php';



/**Recibir datos y almacenar en variables */
$nombreProducto = $_POST['Nombre_Producto'];
$precioEntrada = $_POST['Precio_Entrada'];
$precioCajas = $_POST['Precio_Cajas'];
$precioBlister = $_POST['Precio_Blister'];
$precioUnidad = $_POST['Precio_Unidad'];
$concentracion = $_POST['concentracion'];
$tipoProducto = $_POST['tipoProducto'];
$laboratorio= $_POST['laboratorio'];
$presentacion = $_POST['presentacion'];








//**Consulta para insertar tabla producto */
  $insertar = "INSERT INTO producto(Nombre_Producto,Precio_Entrada,
  Precio_Caja,Precio_Blister,Precio_Unidad,concentracion,TipoID,LaboratorioID,PresentacionID)
   VALUES('$nombreProducto',$precioEntrada,$precioCajas,$precioBlister,$precioUnidad,'$concentracion',$tipoProducto,$laboratorio,$presentacion)";
  
  
   //**Ejecutar consulta */

echo"$insertar";

   $resultado = mysqli_query($conexion,$insertar);
  
  

   if(empty($resultado)){
    echo "
    <script>
    alert('ERROR');
    window.location='ingresarproductos.php';
    </script>
    ";

   }else{

    echo "
    <script>
    alert('se ha ingresado exitosamente');
    window.location='inventario.php';
    </script>
    ";
   }


//**Cerrar conexion */
mysqli_close($conexion);


?>