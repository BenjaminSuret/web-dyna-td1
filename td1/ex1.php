<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
</head>
<a href="?message=1">1er message</a>
<a href="?message=2">2ème message</a>
<a href="?message=3">3ème message</a>

<body>
	<?php
	echo "Vous êtes sur la page n° ".$_GET["message"];
	?>
</body>
</html>