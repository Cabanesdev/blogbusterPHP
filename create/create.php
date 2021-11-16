<?php 
$titulo = $_POST['titulo'];
$cuerpo = $_POST['cuerpo']; 
$date=date("Y-m-d");

$servername = "localhost:3307";
$username = "user";
$password = "markcoronadocabanes";


$conn = new mysqli($servername, $username, $password, "blogbuster");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO post(titulo, cuerpo, fecha)
	VALUES ('$titulo', '$cuerpo', '$date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
