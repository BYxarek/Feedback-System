<?php
include 'db.php';

$sql = "SELECT * FROM product_feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Имя: " . $row["name"]. " - Продукт: " . $row["product"]. " - Отзыв: " . $row["feedback"]. " - Дата: " . $row["created_at"]. "<br>";
    }
} else {
    echo "Нет отзывов";
}

$conn->close();
?>