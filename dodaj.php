<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = trim($_POST['imie'] ?? '');

    if ($imie === '') {
        header('Location: index.php?status=pusto');
        exit;
    }

    $stmt = $pdo->prepare('INSERT INTO uczniowie (imie) VALUES (?)');
    $stmt->execute([mb_substr($imie, 0, 50)]);

    header('Location: index.php?status=ok');
    exit;
}

header('Location: index.php');
