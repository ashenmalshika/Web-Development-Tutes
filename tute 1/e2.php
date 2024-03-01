<?php
$students = [
    ['name' => 'Samwise Gamgee', 'mark' => 88],
    ['name' => 'Frodo Baggins', 'mark' => 56],
    ['name' => 'Elrond Half-Elven', 'mark' => 92],
    ['name' => 'Gandalf Mithrandir', 'mark' => 35],
    ['name' => 'Merry Brandybuck', 'mark' => 41],
    ['name' => 'Pippin Took', 'mark' => 25],
    ['name' => 'Legolas Greenleaf', 'mark' => 67]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mark = $_POST['mark'];

    echo "<h1>Students with Marks of " . $mark . " or Above</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Mark</th></tr>";

    foreach ($students as $student) {
        if ($student['mark'] >= $mark) {
            echo "<tr><td>" . $student['name'] . "</td><td>" . $student['mark'] . "</td></tr>";
        }
    }

    echo "</table>";
} else {
    echo "Error: Invalid request method.";
}
?>