<?php
$id =  $_GET["id"];

require './mysql.php';

$sql="Select * from post where id = $id";
foreach($conn->query($sql) as $row) {
	$titulo = $row['titulo'];
	$cuerpo = $row['cuerpo'];
	$fecha  = $row['fecha'];
}


?>

<html>
<?php require './head.php';?>
<body>
	<div class="container">
	<h1>CREAR POST</h1>
		<form  method="post">
		<div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value='<?php echo $titulo;?>'/>
  </div>
  <div class="mb-3">
    <label for="cuerpo" class="form-label">Cuerpo</label>
		<textarea name="cuerpo" class="form-control" placeholder="Cuerpo post" style="height: 200px"><?php echo $cuerpo;?></textarea>
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

	if(!(empty($titulo)||empty($cuerpo))){
		require './mysql.php';

		$sql = "UPDATE post set titulo='$titulo', cuerpo='$cuerpo' where id=$id";

		if ($conn->query($sql) === TRUE) {
		header("Location: ./view.php?id=$id", true, 301);
		exit();
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
