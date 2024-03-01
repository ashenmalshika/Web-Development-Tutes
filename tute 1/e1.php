<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $coursework1 = $_POST['coursework1'];
    $coursework2 = $_POST['coursework2'];

    if ($coursework1 < 0 || $coursework1 > 100 || $coursework2 < 0 || $coursework2 > 100) {
        echo "Error: Marks must be between 0 and 100.";
    } else {
        $module_mark = ($coursework1 * 0.4) + ($coursework2 * 0.6);
        echo "Module Mark: " . round($module_mark, 2);
    }
} else {
    echo "Error: Invalid request method.";
}
?>