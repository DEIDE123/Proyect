<html>
<body>
<!----------------------------Data save------------------------------------->
<?php
    $nombreApellido=$_POST['nombreApellido'];
   
    $email=$_POST["email"];
  
    $telefono=$_POST["telefono"];

?>   

Datos recibidos:<br>
Nombre y Apellido: <?php echo $nombreApellido; ?><br>

Email: <?php echo $email; ?><br>

Telefóno: <?php echo $telefono; ?><br>

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
$sql = "INSERT INTO particular (nombreApellido, email, telefono)
VALUES ('$nombreApellido','$email', '$telefono' )";

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