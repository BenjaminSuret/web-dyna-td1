<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Exercice 4</title>
</head>

<a href="?nblignes=2&nbColonnes=2">2x2</a>
<a href="?nblignes=5&nbColonnes=5">5x5</a>
<a href="?nblignes=10&nbColonnes=8">10x8</a>

<body>
	<?php
		echo "<table border='1'>
    <tbody>";
    for($i=0;$i<$_GET["nbColonnes"];$i++){
        echo"<tr>";
        for($i=0;$i<$_GET["nblignes"];$i++){
            echo"<td>x-x</td>";
        }
        echo"</tr>";
    }
    for($i=0;$i<$_GET["nbColonnes"];$i++){
        echo"<tr>";
        for($i=0;$i<$_GET["nblignes"];$i++){
            echo"<td>x-x</td>";
        }
        echo"</tr>";
    }	?>
</body>
</html>