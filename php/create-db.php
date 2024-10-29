<?php
include 'db.php';

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS `$dbname`";
if ($conn->query($sql) === TRUE) {
    echo "Database successfully created or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Connect to the database
$conn->select_db($dbname);

// Create tables if they don't exist
$tables = [
    "CREATE TABLE IF NOT EXISTS product_feedback (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        product VARCHAR(255) NOT NULL,
        feedback TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )",
    "CREATE TABLE IF NOT EXISTS technical_support (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        issue VARCHAR(255) NOT NULL,
        description TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )",
    "CREATE TABLE IF NOT EXISTS general_questions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        question TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )"
];

foreach ($tables as $sql) {
    if ($conn->query($sql) === TRUE) {
        echo "Table successfully created or already exists.<br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

// Close the connection
$conn->close();
?>