<?php
include 'db.php';

$sql = "SELECT * FROM technical_support";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Имя: " . $row["name"]. " - Проблема: " . $row["issue"]. " - Описание: " . $row["description"]. " - Дата: " . $row["created_at"]. "<br>";
    }
} else {
    echo "Нет сообщений";
}

$conn->close();
?>