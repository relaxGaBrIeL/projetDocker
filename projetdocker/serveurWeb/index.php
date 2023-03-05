<!DOCTYPE html>
<html>
<head>
	<title>Projet Docker</title>
</head>
<body>
	<h1>Affichage des utilisateurs</h1>

	<?php
		$host = getenv('DB_HOST');
		$user = getenv('DB_USER');
		$password = getenv('DB_PASSWORD');
		$name = getenv('DB_NAME');
		$port = getenv('DB_PORT');

		$conn = mysqli_connect($host, $user, $password, $name, $port);

		if (!$conn){
			die("La connexion a échouée: " . mysqli_connect_error());
		}

		$sql = "Select Firstname, Lastname, Email FROM Users";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0){
			echo "<table>";
			echo "<tr><th>Prénom</th><th>Nom</th><th>Email</th></tr>";
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tr><td>" . $row["Firstname"] . "</td><td>" . $row["Lastname"] . "</td><td>" . $row["Email"] . "</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "Il n'y a pas d'uilisateurs dans la base";
		}

		mysqli_close($conn);
	?>

</body>
</html>
