<?php
require 'config.php';

$status = $_GET['status'] ?? '';
$wiersze = $pdo->query('SELECT id, imie FROM uczniowie ORDER BY id DESC')->fetchAll();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PiABD – dodawanie rekordu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="karta">
        <h1>Dodaj rekord do bazy</h1>
        <p class="opis">Wpisz imię i kliknij przycisk – skrypt PHP doda wpis do tabeli <code>uczniowie</code>.</p>

        <?php if ($status === 'ok'): ?>
            <p class="komunikat ok">Rekord został dodany.</p>
        <?php elseif ($status === 'pusto'): ?>
            <p class="komunikat blad">Wpisz imię przed dodaniem.</p>
        <?php endif; ?>

        <form action="dodaj.php" method="post">
            <input type="text" name="imie" placeholder="Imię" maxlength="50" required>
            <button type="submit">Dodaj rekord</button>
        </form>

        <h2>Zawartość tabeli</h2>
        <table>
            <tr><th>ID</th><th>Imię</th></tr>
            <?php foreach ($wiersze as $w): ?>
            <tr>
                <td><?= $w['id'] ?></td>
                <td><?= htmlspecialchars($w['imie']) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>

    <h5> Igor Strojkowski 4b</h5>
</body>
</html>
