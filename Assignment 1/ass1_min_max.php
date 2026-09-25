<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Write program that compares three integer numbers then specifies and prints the greatest and smallest one (Do not use built-in functions such as min or max).
    // Variables
    $a = 10;
    $b = 20;
    $c = 30;

    $max = $a;
    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }

    $min = $a;
    if ($b < $min) {
        $min = $b;
    }
    if ($c < $min) {
        $min = $c;
    }

    echo "Greatest number is: " . $max . "<br>";
    echo "Smallest number is: " . $min . "<br>";
    ?>

</body>
</html>


