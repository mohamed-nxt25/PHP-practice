<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Write a program that prints whether the number is a prime or non-prime.
    $number = 17;
    $isPrime = true;
    if ($number <= 1) {
        $isPrime = false;
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo "$number is a Prime number";
    } else {
        echo "$number is a Non-Prime number";
    }
    ?>
</body>
</html>