<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // code that declares an array of one dimension, initialize it to the following values: (5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9)
    // Print all elements of the array
    $array = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
    echo "Elements of the array: <br>";
    foreach ($array as $value) {
        echo $value . " ";
    }
    echo "<br>";
    echo "<br>";

    // Calculate and print total of all elements
    $total = array_sum($array);
    echo "Total of all elements: " . $total . "<br>";
    echo "<br>";
    echo "<br>";

    // Calculate and print total of even elements 
    $evenTotal = 0;
    foreach ($array as $value) {
        if ($value % 2 == 0) {
            $evenTotal += $value;
        }
    }
    echo "Total of even elements: " . $evenTotal . "<br>";
    echo "<br>";
    echo "<br>";

    // Calculate and print total of odd elements
    $oddTotal = 0;
    foreach ($array as $value) {
        if ($value % 2 != 0) {
            $oddTotal += $value;
        }
    }
    echo "Total of odd elements: " . $oddTotal . "<br>";
    echo "<br>";
    echo "<br>";

    // Find minimum element and its positions
    $min = min($array);
    echo "Minimum element: " . $min . "<br>";
    echo "Positions of minimum element: ";
    foreach ($array as $index => $value) {
        if ($value == $min) {
            echo $index . " ";
        }
    }
    echo "<br>";
    echo "<br>";

    // Find maximum element and its positions
    $max = max($array);
    echo "Maximum element: " . $max . "<br>";
    echo "Positions of maximum element: ";
    foreach ($array as $index => $value) {
        if ($value == $max) {
            echo $index . " ";
        }
    }
    echo "<br>";
    echo "<br>";
    ?>
</body>
</html>