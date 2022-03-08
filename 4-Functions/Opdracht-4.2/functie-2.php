<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function rekenUit ($NUMBER1, $NUMBER2, $NUMBER3){
    $answer = $NUMBER1+ $NUMBER2+ $NUMBER3;
    return $answer;
    }
    $answer1 = rekenUit(12, 5, 9);
    $answer2 = rekenUit(11, 7, 23);
    $answer3 = rekenUit(2, 17, 27);

    echo $answer1 . "<br>";
    echo $answer2 . "<br>";
    echo $answer3 . "<br>";

    ?>
</body>
</html>