<form>
<select name = "classes">
<?php

$klassen = array("8A", "8B", "8C", "8D", "9A", "9B", "9C", "9D", "9E");
foreach ($klassen as $klas) {
    echo "<option value=$klas>$klas</option>";
}
?>
</select>
<input type="submit" value="Submit">
</form>