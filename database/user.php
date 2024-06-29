<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $dP = $_POST['dietary_preferences'];
    $allergies = $_POST['allergies'];
    $health_goals = $_POST['health_goals'];

    // Database connection
    $conn = new mysqli('localhost', 'root', 'root', 'test');

    // Check connection
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO UserProfiles (age, gender, weight, height, dP, allergies, health_goals) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }

    $stmt->bind_param("isiisss", $age, $gender, $weight, $height, $dP, $allergies, $health_goals);

    // Execute and check for errors
    if ($stmt->execute()) {
        echo "Registration successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>