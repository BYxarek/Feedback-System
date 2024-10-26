<?php
include 'db.php';

$sql = "SELECT * FROM general_questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Имя: " . $row["name"]. " - Вопрос: " . $row["question"]. " - Дата: " . $row["created_at"]. "<br>";
    }
} else {
    echo "Нет вопросов";
}

$conn->close();
?>