<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Write PHP program that declares an associative array of two dimensions.
    $array = array(
        "Light" => array("Red" => "Light Red", "Light Green" => "Light Green", "Blue" => "Light Blue"),
        "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
        "Dark" => array("Red" => "Dark Red", "Green" => "Dark Green", "Blue" => "Dark Blue")
    );
    // Creating a table to display the associative array
    echo "<table border='2'>";
    echo "<tr>";
    echo "<th></th>";
    echo "<th>Red</th>";
    echo "<th>Green</th>";
    echo "<th>Blue</th>";
    echo "</tr>";
    foreach ($array as $rowName => $columns) {
        echo "<tr>";
        echo "<td>" . $rowName . "</td>";
        foreach ($columns as $columnName => $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>