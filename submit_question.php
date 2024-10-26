<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $question = htmlspecialchars($_POST['question']);

    $sql = "INSERT INTO general_questions (name, email, question) VALUES ('$name', '$email', '$question')";

    if ($conn->query($sql) === TRUE) {
        echo "Спасибо за ваш вопрос, $name! Мы свяжемся с вами в ближайшее время.";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>