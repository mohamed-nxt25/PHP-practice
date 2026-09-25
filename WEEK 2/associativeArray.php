<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Assocoiative array
    $person = array(
        "name" => "Mohamed A. Abukar",
        "age" => 30,
        "city" => "Mogadishu"
    );
    echo "Name: " . $person["name"] . "<br>";
    echo "Age: " . $person["age"] . "<br>";
    echo "City: " . $person["city"] . "<br>";

    // display for array
    foreach ($person as $list){
        echo $list . "<br>";
    }
    // Display for array for key and value
    foreach ($person as $key => $value){
        echo $key . ": " . $value . "<br>";
    }
    ?>