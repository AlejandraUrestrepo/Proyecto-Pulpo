<?php 
include("../../php/conexion.php");
//**Recibir datos */
$id = $_GET['id'];


//**Realizar consulta */
$eliminar = "DELETE FROM lote WHERE ID_Lote = '$id'";

//**Ejecutar consulta */
$resultado = mysqli_query($conexion, $eliminar);

if(!$resultado){
    echo 'error en la eliminacion';
  }
  else{
      echo "
      <script>
      alert('se ha eliminado exitosamente');
      window.location='inventario.php';
      </script>
      ";
  }