<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $issue = htmlspecialchars($_POST['issue']);
    $description = htmlspecialchars($_POST['description']);

    $sql = "INSERT INTO technical_support (name, email, issue, description) VALUES ('$name', '$email', '$issue', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your message, $name! We will contact you shortly.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>