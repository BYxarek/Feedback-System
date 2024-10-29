<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $product = htmlspecialchars($_POST['product']);
    $feedback = htmlspecialchars($_POST['feedback']);

    $sql = "INSERT INTO product_feedback (name, email, product, feedback) VALUES ('$name', '$email', '$product', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your feedback, $name!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>