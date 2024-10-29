<?php include 'db.php';

$sql = "SELECT * FROM product_feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . " - Product: " . $row["product"] . " - Feedback: " . $row["feedback"] . " - Date: " . $row["created_at"] . "<br>";
    }
} else {
    echo "No feedback";
}

$conn->close(); ?>