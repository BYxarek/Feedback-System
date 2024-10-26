<?php
include 'db.php';

// Создание базы данных, если она не существует
$sql = "CREATE DATABASE IF NOT EXISTS `$dbname`";
if ($conn->query($sql) === TRUE) {
    echo "База данных успешно создана или уже существует.<br>";
} else {
    echo "Ошибка при создании базы данных: " . $conn->error . "<br>";
}

// Подключение к базе данных
$conn->select_db($dbname);

// Создание таблиц, если они не существуют
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
        echo "Таблица успешно создана или уже существует.<br>";
    } else {
        echo "Ошибка при создании таблицы: " . $conn->error . "<br>";
    }
}

// Закрытие соединения
$conn->close();
?>