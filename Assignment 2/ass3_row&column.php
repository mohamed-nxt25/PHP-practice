<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // row names are CA202, CA207, and CA202, column names are Name, Phone, Address.
    $students = array(
        "CA202" => array("Mohamed Aden Abukar", "0618301582", "Mogadishu"),
        "CA207" => array("Ahmed Ismail Salad", "0612748511", "Hargeisa"),
        "CA208" => array("Abdi Ahmed Jama'", "0628874559", "Marko")
    );
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Class ID</th>";
    echo "<th>Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Address</th>";
    echo "</tr>";
    foreach ($students as $id => $student) {
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $student[0] . "</td>";
        echo "<td>" . $student[1] . "</td>";
        echo "<td>" . $student[2] . "</td>";

        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>