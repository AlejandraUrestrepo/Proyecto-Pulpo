<?php
include '../../php/conexion.php';

/**Recibir datos tabla lote y almacenar en variables */
$fechaVencimiento = $_POST['Fecha_vencimiento'];
$proveedor = $_POST['provedorID'];
$stock = $_POST['Stock'];
$product = $_POST['productoid'];


//**Consulta para insertar tabla lote */
$insertarLote = "INSERT INTO lote(Fecha_vencimiento,provedorID,Stock,IdProducto ) VALUES ('$fechaVencimiento','$proveedor',$stock,$product)";

  
   //**Ejecutar consulta */

echo $insertarLote;
$resultado2 = mysqli_query($conexion, $insertarLote);



if(empty($resultado2)){
   echo "
    error
      ";
   }else{

      echo "
      <script>
      alert('se ha ingresado exitosamente');
      window.location='ingresarlote.php';
      </script>
      ";
   }
?>