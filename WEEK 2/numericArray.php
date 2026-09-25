<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Example of numeric index array
    // creating array using function array()
    $collection = array();

    // Initialization of array elements
    $collection[0] = 10;
    $collection[1] = "Mohamed Aden Abukar";
    $collection[2] = 3.14;

    // Create & Initialize array using array() function
    $collection = array(10, "Mohamed Aden Abukar", 3.14);
    // Addng new element to the array
    $collection[] = "I am a student at JUST";

    // Displaying array elements
    var_dump($collection);
    // OLD display
    echo "<br>First element: " . $collection[0];
    echo "<br>Second element: " . $collection[1];
    // For each loop to display array elements
    echo "<br>Using for each loop:<br>";
    foreach ($collection as $value) {
        echo $value . "<br>";
    }
    // PRE tag to display array elements
    echo "<pre>";
    var_dump($collection);
    ?>
</body>
</html>