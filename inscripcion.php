<html>
<body>
<!----------------------------Data save------------------------------------->
<?php
    $nombreApellido=$_POST['nombreApellido'];
   
    $email=$_POST['email'];
  
    $telefono=$_POST['telefono'];

    $evento='';
   
  if(isset( $_POST['opcion1'])){
    $evento=$evento.''. $_POST['opcion1'];
  }
  if(isset( $_POST['opcion2'])){
    $evento=$evento.''. $_POST['opcion2'];
  }
  if(isset( $_POST['opcion3'])){
    $evento=$evento.''. $_POST['opcion3'];
  }
  if(isset( $_POST['opcion4'])){
    $evento=$evento.''. $_POST['opcion4'];
  }
/*if(isset($_POST['opcion'])){
  $evento=implode('//', $_POST['opcion'])
}*/
?>   

Datos recibidos:<br>
Nombre y Apellido: <?php echo $nombreApellido; ?><br>

Email: <?php echo $email; ?><br>

Telefóno: <?php echo $telefono; ?><br>

Eventos: <?php echo $evento; ?><br>

<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "eventos";

// make conexion
$conn = new mysqli($servidor, $usuario, $password, $basedatos);
// Check conexion
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
//sql format
$sql = "INSERT INTO particular (nombreApellido, email, telefono, evento)
VALUES ('$nombreApellido','$email', '$telefono','$evento' )";


if ($conn->query($sql) === TRUE) {
  echo "Dado de alta satisfactoriamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// close conexion
$conn->close();
?>

</body>
</html>