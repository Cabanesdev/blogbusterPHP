<html>
<?php require './head.php';?>
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

	if(!(empty($titulo)||empty($cuerpo))){
		require './mysql.php';

		$sql = "INSERT INTO post(titulo, cuerpo, fecha)
			VALUES ('$titulo', '$cuerpo', '$date')";

		if ($conn->query($sql) === TRUE) {
			echo "<div class='container w-50 alert alert-success' role='alert'>
  			Registro Creado Correctamente
				</div>";
		}else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
	}else{
		echo "<div class='container w-50 alert alert-danger' role='alert'>
					Rellene todos los campos	
				</div>";
		}
	
	$conn->close();
}
?>
