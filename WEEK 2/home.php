<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // For Loop Example
    echo "<h2>For Loop Example</h2>";
    for ($i=1; $i <= 5; $i++) { 
        echo "The number is: $i <br>";
    }

    // do-while Loop Example
    echo "<h2>do-while Loop Example</h2>";
    $count=0;
    do {
        echo "The number is: $count <br>";
        $count++;
    } while ($count <= 5);

    // Factorial Example using do-while Loop
    echo "<h2>Factorial Example using do-while Loop</h2>";
    $result=1;
    $n=5;
    do{
        $result *= $n;
        echo "The factorial of $n is: $result <br>";
        $n--;
    } while ($n > 0);
    echo "The factorial of 5 is: $result <br>";

    // while Loop Example
    echo "<h2>While Loop Example</h2>";
    $count=1;
    while ($count <= 5) {
        echo "The number is: $count <br>";
        $count++;
    }

    // Multiplication for While Loop Example
    echo "<h2>Multiplication for While Loop Example</h2>";
    $count=1;
    while ($count <= 12) {
        echo "$count times 12 is: " . $count * 12 . "<br>";
        ++$count;
    }

    // Break & Continue Example
    echo "<h2>Break & Continue Example</h2>";
    for ($i=1; $i <= 10; $i++) {
        if ($i == 5) {
            echo "Breaking the loop at $i <br>";
            break;
        }
        if ($i == 3) {
            echo "Skipping the iteration at $i <br>";
            continue;
        }
        echo "The number is: $i <br>";
    }

    // Example of Nested Loops to create a multiplication table
    echo "<h2>Example of Nested Loops to create a multiplication table</h2>";
    for ($i=1; $i <= 3; $i++) { 
        for ($j=1; $j <= 5; $j++) { 
            echo "$i x $j = " . $i * $j . "<br>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>









