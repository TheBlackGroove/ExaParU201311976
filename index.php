<!DOCTYPE html>
<html>
<head>
	<title>Prueba Examen Parcial</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div style="padding: 0px 30px 0px 30px">
		<img src="images/header.png"/>
	</div>
	<div>
		<table>
			<theader>
				
			</theader>
			<tbody>
				<?php
					$servername = "us-cdbr-iron-east-03.cleardb.net";
					$username = "b74ba3320e82ec";
					$password = "2d194843";
					$dbname = "ad_bb6ddb2f34daf52";
					
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					$sql = "SELECT * from servicios";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {?>
						<?php echo "<tr>"; ?>				
						<?php echo "<td><img src=\"../", $row['imagen_servicio'], "\" /></td>"; ?>
						<?php echo "<td>", $row['codigo_servicio'], "</td>"; ?>
						<?php echo "<td>", $row['nombre_servicio'], "</td>"; ?>
						<?php echo "<td>", $row['descripcion_servicio'], "</td>"; ?>
						<?php echo "</tr>"; ?>
						<?php 
						}
					} 
					else {
						echo "0 results";
						  }
					$conn->close();
				?> 
			</tbody>
		</table>
	</div>
</body>
</html>
