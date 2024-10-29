<?php
include 'db.php';

$sql = "SELECT * FROM technical_support";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Issue: " . $row["issue"]. " - Description: " . $row["description"]. " - Date: " . $row["created_at"]. "<br>";
    }
} else {
    echo "No messages";
}

$conn->close();
?>