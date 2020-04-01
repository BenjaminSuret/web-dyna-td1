<?php function createHtmlTable($lignes,$colonnes){
    echo "<table border='1'>
    <tbody>";
    for($a=0;$a<=$lignes;$a++){
        echo "<tr>"; 
        for($b=0;$b<=$colonnes;$b++){ 
            echo "<td>$a-$b</p></td>"; 
        } 
        echo "</tr>"; 
    } 
    echo "</tbody>
    </table>";
}

?>