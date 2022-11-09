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
/*//coger el current idParticipante (aunque es un auto_Increment entonces es el max)
$idParticipante = $conn->query("SELECT MAX(IdParticipante) from participantes")->fetch_row()[0];

//if desarollo is checked
if (isset($_POST["desarrollo"])) {
  //crear una relacion con este participante y el sub evento(desarollo)
    $sql1 = "INSERT INTO detalleparticipante (IdSubEvento , IdParticipante)
    VALUES (1 ,$idParticipante)";
    $conn->query($sql1);
}

//if programacion is checked
if (isset($_POST["programacion"])) {
  //crear una relacion con este participante y el sub evento(programacion)
  $sql2 = "INSERT INTO detalleparticipante (IdSubEvento , IdParticipante)
  VALUES (2 ,$idParticipante)";
  $conn->query($sql2);
}

//if ingles is checked
if (isset($_POST["ingles"])) {
  //crear una relacion con este participante y el sub evento(ingles)
  $sql3 = "INSERT INTO detalleparticipante (IdSubEvento , IdParticipante)
  VALUES (3 ,$idParticipante)";
  $conn->query($sql3);
}

//if fol is checked
if (isset($_POST["fol"])) {
  //crear una relacion con este participante y el sub evento(fol)
  $sql4 = "INSERT INTO detalleparticipante (IdSubEvento , IdParticipante)
  VALUES (4 ,$idParticipante)";
  $conn->query($sql4);
}
*/
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

//coger el current idParticipante (aunque es un auto_Increment entonces es el max)
//$idParticular = $conn->query("SELECT MAX(idParticular) from particular")->fetch_row()[0];
// make conexion
$conn = new mysqli($servidor, $usuario, $password, $basedatos);
// Check conexion
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
//sql format
$sql = "INSERT INTO particular (nombreApellido, email, telefono, evento)
VALUES ('$nombreApellido', '$email', '$telefono','$evento' )";


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