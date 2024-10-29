<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $question = htmlspecialchars($_POST['question']);

    $sql = "INSERT INTO general_questions (name, email, question) VALUES ('$name', '$email', '$question')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your question, $name! We will get back to you shortly.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>