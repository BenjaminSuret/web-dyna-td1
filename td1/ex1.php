<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
</head>
<a href="?message=lol">1er message</a>

<body>
	<?php
	echo("Hello world !");
	echo "Vous êtes sur la page n° ".$_GET["page"];
	echo "Vous êtes sur la page n° ".$_GET["message"];
	?>
</body>
</html>