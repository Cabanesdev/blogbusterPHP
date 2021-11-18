<html>

<head>
	<title>Blogbuster</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
	<div class="container">
	<h1>CREAR POST</h1>
		<form  method="post">
		<div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo"/>
  </div>
  <div class="mb-3">
    <label for="cuerpo" class="form-label">Cuerpo</label>
		<textarea name="cuerpo" class="form-control" placeholder="Cuerpo post" style="height: 200px"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
  <a href="./index.php"><button class="btn btn-secondary">Volver</button></a>
	</div>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$titulo = $_POST['titulo'];
	$cuerpo = $_POST['cuerpo'];
	$date = date("Y-m-d");

	require './mysql.php';

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
