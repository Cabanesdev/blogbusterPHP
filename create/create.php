<html>

<head>
	<title>Blogbuster</title>
	<link rel="stylesheet" href="create.css" />
</head>

<body>
	<h1>CREAR POST</h1>
	<div class="container">
		<form action="./create.php" method="post">
			<label for="titulo">Titulo</label>
			<input type="text" name="titulo" placeholder="Titulo post" />
			<label for="lname">Cuerpo</label>
			<textarea name="cuerpo" placeholder="Cuerpo post" style="height: 200px"></textarea>
			<input type="submit" />
		</form>
	</div>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = $_POST['titulo'];
	$cuerpo = $_POST['cuerpo'];
	$date = date("Y-m-d");

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
}
?>
