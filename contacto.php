<html>
<body>
<!---------------------------Declaration of variables------------------------->
<?php
    $nombreApellido=$_POST['nombreApellido'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["mensaje"];

?>   
<!----------------------------Data save------------------------------------->
Datos recibidos:<br>
Nombre y Apellido: <?php echo $nombreApellido; ?><br>
Email: <?php echo $email; ?><br>
Telefono: <?php echo $telefono; ?><br>
Asunto: <?php echo $asunto; ?><br>
Mensaje: <?php echo $mensaje; ?><br>

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
$sql = "INSERT INTO consulta (nombreApellido, email, telefono, asunto, mensaje)
VALUES ('$nombreApellido', '$email', '$telefono', '$mensaje', '$asunto')";

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