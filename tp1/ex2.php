<?php
session_start();
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Hello</title>

	</head>


	<body>

		<form method="GET" action="ex2.php"/>


			<label for="message">Message</label>
			<input type="text" name="message" id="message" value="<?php if (isset($_SESSION['message'])){echo $_SESSION['message'];} ?>"/>
			<label for="size">Taille</label>
			<input type="number" name="size" id="size" value="<?php if (isset($_SESSION['size'])){echo $_SESSION['size'];} ?>">
			<label for="color">Couleur</label>
			<select name="color" id="color">
				<option value="---" selected disable>Sélectionnez une couleur</option>
				<option value="red">Rouge</option>
				<option value="blue">Bleu</option>
				<option value="green">Vert</option>
			</select>
			<input type="submit" value="Modifier la couleur">
			<input type="submit" name="diminuer" value="-">
			<input type="submit" name="grossir" value="+">
		
		</form>


		<?php



			if( isset($_GET['size']) and isset($_GET['color']) and isset($_GET['message']) ){

				$size=$_GET['size'];
				$color=$_GET['color'];
				$message=$_GET['message'];
				if( isset($_GET['diminuer']) ){
					echo 'diminuer';
					$size--;
					$_SESSION['size']=$size;
					echo $size;
				}elseif( isset($_GET['grossir']) ){
					echo 'augmenter';
					$size++;
					$_SESSION['size']=$size;
					echo $size;
				}

				$_SESSION['message']=$message;


				echo "<h3 style='font-size:{$size}px ; color:{$color};'> $message </h3>";




			}elseif (isset($_GET['message']) and empty($_GET['color']) and empty($_GET['size']) ){

				if( isset($_GET['diminuer']) ){
					echo 'diminuer';
					$size=$size - 1;
					echo $size;
				}elseif( isset($_GET['grossir']) ){
					echo 'augmenter';
					$size=$size + 1;
				}

				echo "<h3 style='font-size:12px ; color:black;'> $message </h3>";

			}elseif(empty($_GET['message'])){

				echo 'Erreur de paramètre';


			}


		?>



	</body>

</html>