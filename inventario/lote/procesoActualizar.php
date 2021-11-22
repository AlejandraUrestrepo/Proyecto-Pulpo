<?php 
include("../../php/conexion.php");

/**Recibir datos y almacenar en variables */
$idLote = $_POST['ID_Lote'];
$fechaVencimiento = $_POST['Fecha_vencimiento'];
$proveedor = $_POST['provedorID'];
$stock = $_POST['Stock'];




/// actualizar datos


$actualizar = "UPDATE lote SET ID_Lote='$idLote', Fecha_vencimiento = '$fechaVencimiento', provedorID = '$proveedor' ,
 Stock = '$stock'  WHERE ID_Lote = '$idLote'";


//**Ejecutar consulta */

$resultado = mysqli_query($conexion, $actualizar);



if(!$resultado){
  echo 'error en la consulta';
}
else{
    echo "
    <script>
    alert('se ha sido actualizado exitosamente');
    window.location='ingresarlote.php';
    </script>
    ";
}
//**Cerrar conexion */
mysqli_close($conexion);
?>