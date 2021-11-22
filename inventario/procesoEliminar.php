<?php 
include("../php/conexion.php");
//**Recibir datos */
$id = $_GET['id'];


//**Realizar consulta */
$eliminar = "DELETE FROM producto WHERE Codigo_Producto = $id";

//**Ejecutar consulta */
$resultado = mysqli_query($conexion, $eliminar);

if(!$resultado){
    echo "
    <script>
    alert('Recuerda que antes de eliminar un producto debes de eliminar el lote');
    window.location='inventario.php';
    </script>
    ";
  }
  else{
      echo "
      <script>
      alert('se ha eliminado exitosamente');
      window.location='inventario.php';
      </script>
      ";
  }