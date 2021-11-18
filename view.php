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
</html>
<body>
<?php
include './Parsedown.php';
$Parsedown = new Parsedown();
echo "<div class='position-absolute top-50 start-50 translate-middle card w-75'>
  <div class='card-body col-md-12'>
    <h1> $titulo</h1>";
echo $Parsedown->text($cuerpo);
		
echo "<div>
      <hr />
      <div class='pull-right row'>
        <span class='col label label-default'>$fecha</span>
      </div>
    </div>
  </div>
  <a href='./index.php'><button class='col btn btn-secondary'>Volver</button></a>
</div>
";
?>
</body>
