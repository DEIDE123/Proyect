<html>
<body>

<?php
    $nombreApellido=$_POST['nombreApellido'];
    $genero=$_POST['genero'];
    $localidad=$_POST['localidad'];
    $email=$_POST["email"];
    $telefono=$_POST["telefono"];

?>   

Datos recibidos:<br>
Nombre y Apellido: <?php echo $nombreApellido; ?><br>
Genéro: <?php echo $genero; ?><br>
Localidad: <?php echo $localidad; ?><br>
Email: <?php echo $email; ?><br>
Telefóno: <?php echo $telefono; ?><br>

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

$sql = "INSERT INTO inscripcion (nombreApellido, genero, localidad, email, telefono)
VALUES ('$nombreApellido', '$genero', '$localidad', '$email', '$telefono' )";

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