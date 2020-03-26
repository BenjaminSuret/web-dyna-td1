<?php
include "header.php";
?>

<a href="?lignes=2&colonnes=2">Le tableau 2x2</a>
<a href="?lignes=5&colonnes=5">Le tableau 5x5</a>
<a href="?lignes=10&colonnes=8">Le tableau 10x8</a>

<body>
	
		<table border='1'>

	<tbody>
		<?php 
			for($i=0;$i<$lignes;$i++)
			{
		?>
				<tr>

        <?php 
        	for($j=0;$j<$nbColonnes;$j++){
        ?>

            
        <?php }
        ?>
        </tr>

      <?php 
  }
  ?>
	?>

Contenu de la page
<?php
include "footer.php";
