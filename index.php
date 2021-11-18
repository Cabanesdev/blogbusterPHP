<html>
<?php require './head.php';?>
<body>

<?php

require './mysql.php';

echo "<div class='container'><h1>Blogbuster</h1> <table class='table table-light'>

  <thead>
    <tr>	
      <th scope='col'>Id</th>
      <th scope='col'>Titulo</th>
      <th scope='col'>Cuerpo</th>
      <th scope='col'>Fecha</th>
      <th scope='col'></th>
    </tr>
  </thead>
	<tbody>";

	$sql="Select * from post";
  foreach($conn->query($sql) as $row) {
    echo "<tr>
      <th scope='row'>".$row['id']."</th>
      <td>".$row['titulo']."</td>
      <td>".$row['cuerpo']."</td>
      <td>".$row['fecha']."</td>
			<td>
			<a href='./view.php?id=".$row['id']."'><i class='fas fa-eye'></i></a>
			<a href='./update.php?id=".$row['id']."'><i class='fas fa-pencil'></i></a>
			<a href='./delete.php?id=".$row['id']."'><i class='fas fa-trash'></i></a>
			</td>
    </tr>";
  }
  echo "</tbody></table>";
$conn->close();
?>

<a href="./create.php"><button type="button" class="btn btn-primary">create</button></a>
</div>
</body>

</html>
