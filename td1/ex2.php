<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
</head>

<!--faire des commentaires -->
<a href="?color=%23ff0000&size=15&message=tout">Message 1</a>
<a href="?color=%2339ff00&size=30&message=doit">Message 2</a>
<a href="?color=%230080ff&size=50&message=marcher">Message 3</a>

<form method="GET">
	<label for="color">Color : </label>
	<input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
	<label for="size">Size : </label>
	<input type="number" value="" name="size" id="size">
	<label for="contenue">Contenue du message</label>
	<input type="text" value="" name="message" id="message">
	<input type="submit" value="Valider">
</form>

<body>

	<?php
	echo "<div style='font-size: {$_GET["size"]}px ;color: {$_GET["color"]};'>Le Message est {$_GET["message"]}</div>";

	if (empty($_GET)) {
		echo "Erreur ! Veuillez entrer des paramètres";
	}
	if (empty($_GET["size"] and $_GET["Color"])) {
		echo "<div style='font-size: 120px; color: black'>{$_GET["message"]}</div>";
	}
	else {
		echo "<div style='font-size: {$_GET["size"]}px; color: {$_GET["Color"]}'>{$_GET["message"]}</div>";
	}
	?>

</body>
</html>

