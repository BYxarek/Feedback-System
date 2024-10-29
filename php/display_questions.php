<?php include 'db.php';

$sql = "SELECT * FROM general_questions"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) { 
        echo "Name: " . $row["name"]. " - Question: " . $row["question"]. " - Date: " . $row["created_at"]. "<br>"; 
    } 
} else { 
    echo "No questions"; 
}

$conn->close(); 
?>