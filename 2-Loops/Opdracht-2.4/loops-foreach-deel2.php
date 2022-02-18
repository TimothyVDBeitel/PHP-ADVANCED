<form>
<select name = "classes">
<?php

$klassen = array("8A", "8B", "8C", "8D", "9A", "9B", "9C", "9D", "9E");
echo "<ul>";
foreach ($klassen as $klas) {

    echo "<li><option value=$klas>$klas</option></li>";
}
echo "</ul>";

?>
</select>
<input type="submit" value="Submit">
</form>