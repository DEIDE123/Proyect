<html>
<body>

<?php
    $nombreApellido=$_POST["nombreApellido"];
    $Email=$_POST["Email"];
    $Telofono=$_POST["Telofono"];
    $Asunto=$_POST["Asunto"];
    $Mensaje=$_POST["Mensaje"];

?>   

Datos recibidos:<br>
Nombre y Apellido: <?php echo $nombreApellido; ?><br>
Email: <?php echo $Email; ?><br>
Telofono: <?php echo $Telofono; ?><br>
Asunto: <?php echo $Asunto; ?><br>
Mensaje: <?php echo $Mensaje; ?><br>

<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "contacto0";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $basedatos);
// Checkear conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$sql = "INSERT INTO contacto0 (nombreApellido, Email, Telofono, Asunto, Mensaje)
VALUES ('$nombreApellido', '$Email', '$Telofono', '$Mensaje', '$Asunto')";

if ($conn->query($sql) === TRUE) {
  echo "Dado de alta satisfactoriamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>

</body>
</html>