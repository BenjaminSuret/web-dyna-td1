<form method="POST">
	<label for="contenue">Colonnes</label>
        <input id="colonnes" name="colonnes" ></input>
        
<form  method="POST">
        <label for="contenue">Lignes</label>
        <input id="lignes" name="lignes"></input>
    <input type="submit" value="Valider">
</form>
<?php
include("fonction.php");
createHtmlTable($_POST["lignes"],$_POST["colonnes"]);

?>