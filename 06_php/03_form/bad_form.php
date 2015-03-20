<!DOCTYPE HTML>
<html lang ="fr">
<head>
	<meta charset ="UTF-8">
</head>
<body>
	<?php
		 echo $date = date("d-m-Y"); 
	 ;?>

	<form method ="post" action="form.php">
		<p>Pr&eacutenom : <input type="text" name="prenom"/></p>
		<p>Nom : <input type="text" name="nom"/><p/>
		<input type="submit" value="Envoyer"/>
	</form>
	<?php
		if($_GET){
			 echo $_GET['prenom'].$_GET['nom'];
		}
		else{

		}
	?>
</body>
</html>