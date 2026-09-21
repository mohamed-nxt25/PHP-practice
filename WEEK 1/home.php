<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Displaying Text
    echo "Hello World";
    echo "<br>";
    print 'Welcome to PHP';
    echo "<br>";

    // Creating & Display Variables
    $name= "Mohamed Aden";
    echo "My name is $name";

    // Creating & Display CONSTANT NAME
    echo "<br>";
    define("AGE", 22);
    echo "My age is ", AGE;
    echo "<br>";

    // If-Else Example
    $marks=87;
    if($marks>=90)
        echo "Excellent";
    elseif ($marks>=80)
        echo "Very Good!";
    elseif ($marks>=50)
        echo "Make a perfect";
    else{
        echo "You're Failed!";
    }

    // Switch Example
    $marks_switch = 10;
    echo "<br>";
    switch (true) {
        case ($marks_switch >= 90):
            echo "Excellent";
            break;
        case ($marks_switch >= 80):
            echo "Very Good!";
            break;
        case ($marks_switch >= 50):
            echo "Make a perfect";
            break;
        default:
            echo "You're Failed!";
    }

    ?>




</body>
</html>