<!DOCTYPE HTML>
<html lang ="fr">
<head>
	<meta charset ="UTF-8">
</head>
<body>
	<?php
		 echo $date = date("d-m-Y"); 
	 ;?>
	<form method ="post" action="post.php">
		<p>Pr&eacutenom : <input type="text" name="prenom"/></p>
		<p>Nom : <input type="text" name="nom"/><p/>
		<input type="submit" value="Envoyer"/>
	</form>
</body>
</html>