<?php
include('config.php');

if (isset($_POST['submit'])) {

    $name           = $_POST['name'];
    $class          = $_POST['class'];
    $regno          = $_POST['regno'];
    $course         = $_POST['course'];
    $admission_date = $_POST['admissions_date']; // FIXED

    // Insert query
    $sql = "INSERT INTO admission (name, class, regno, course, admission_date)
            VALUES ('$name', '$class', '$regno', '$course', '$admission_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2 style='color:green; text-align:center;'>Form Submitted Successfully!</h2>";
    } else {
        echo "<h2 style='color:red; text-align:center;'>Error: " . $conn->error . "</h2>";
    }

    $conn->close();
}
?>
