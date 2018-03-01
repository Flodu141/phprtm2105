<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Hello</title>

	</head>


	<body>

		<a href="ex1.php?message=Hello+world">Afficher Hello</a><br/>
		<a href="ex1.php?message=Bonjour">Afficher Bonjour</a><br/>
		<a href="ex1.php?message=Je+suis+ton+père">Spéciale</a><br/>


		<?php
			if(isset($_GET['message'])){

				echo $_GET['message'];
			}
		?>


	</body>

</html>