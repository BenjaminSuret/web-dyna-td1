<?php
include "header.php";
?>

<body>

<a href="?lignes=2&colonnes=2">Le tableau 2x2</a>
<a href="?lignes=5&colonnes=5">Le tableau 5x5</a>
<a href="?lignes=10&colonnes=8">Le tableau 10x8</a>


<?php
    echo "<table border='1'>
  			<tbody>";
    			for($a=1;$a<=$_GET["lignes"];$a++)
    			    { 
						if (($a % 2) == 0){
            				$epaisseur = "bold";
        				}
        				else{
            				$epaisseur = "normal";
        				} 
       					echo "<tr>"; 
        				for($b=1;$b<=$_GET["colonnes"];$b++)
        					{ 
        				if (($b % 2) == 1){
                			$couleur = "blue";
            			}
            			else{
                			$couleur = "green";
            			}
            				echo "<td> <p style='font-weight: $epaisseur; color: $couleur'>$a-$b</p> </td>";
        					} 
        				echo "</tr>"; 
    				} 
			echo "</tbody>
    </table>";
?>    

<?php
include "footer.php";
?>