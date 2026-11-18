<?php
$host = 'localhost';          
$baza = 'zadanie';
$user = 'root';
$haslo = '';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$baza;charset=utf8mb4",
        $user,
        $haslo,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die('Błąd: ' . $e->getMessage());
}
