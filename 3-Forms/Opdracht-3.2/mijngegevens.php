<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $_POST["kleur"] ?>">

</body>
</html>
<?php
 
echo "voornaam: ".$_POST['1stname'] . "<br>";
echo "achternaam: ".$_POST['lastname'] . "<br>";
echo "klas: ".$_POST['klas'] . "<br>";
echo "leeftijd: ".$_POST['leeftijd'] . "<br>";
echo "straat: ".$_POST['straat'] . "<br>";
echo "plaats: ".$_POST['plaats'] . "<br>";
echo $_POST['kleur'];

if (isset($_POST['geslacht']))
  {
$Gender = $_POST["geslacht"];

echo $Gender;
  }
?>