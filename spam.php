<html>
<body>
<!----------------------------Data save------------------------------------->
<?php
    $email=$_POST['email'];
    

?>   

Datos recibidos:<br>
Email: <?php echo $email; ?><br>


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
$sql = "INSERT INTO folleto (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
  echo "Dado de alta satisfactoriamente, ahora estaras simpre informado de nuevos eventos";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// close conexion
$conn->close();
?>

</body>
</html>