<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Write a program that produces multiplication table (up to 12*12) using nested loops.
    echo "<table border='2' cellpadding='9' cellspacing='2'>";
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 12; $j++) {
            echo "<td>" . ($i * $j) . 
            "</td>";
        }
        echo "</tr>";
    }
    ?>
    
</body>
</html>