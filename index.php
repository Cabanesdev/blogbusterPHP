<html>

<head>
	<title>Blogbuster</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<h1>Blogbuster</h1>

<?php

require './mysql.php';

echo "<table class='table'>
  <thead>
    <tr>	
      <th scope='col'>Id</th>
      <th scope='col'>Titulo</th>
      <th scope='col'>Cuerpo</th>
      <th scope='col'>Fecha</th>
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
    </tr>";
  }
  echo "</tbody></table>";
$conn->close();
?>

<a href="./create.php"><button type="button" class="btn btn-primary">create</button></a>
</body>

</html>
