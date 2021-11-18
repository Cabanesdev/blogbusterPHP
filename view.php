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
echo "<div class='position-absolute top-50 start-50 translate-middle card w-75'>
  <div class='card-body col-md-12'>
    <h1> $titulo</h1>
    <p>	$cuerpo</p>
    <div>
      <hr />
      <div class='pull-right row'>
        <span class='col label label-default'>$fecha</span>
      </div>
    </div>
  </div>
</div>";
?>
</body>
