<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel użytkownika</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dashboard-page">

    <header class="topbar">

        <div class="topbar-left">
            <h1>Panel główny</h1>

            <p>
                Witaj, <?php echo htmlspecialchars($_SESSION["username"]); ?> 👋
            </p>
        </div>

        <nav class="topbar-menu">
            <a href="sale.php">Rezerwacja sal</a>
            <a href="dostepne.php">Dostępne sale </a>
            <a href="wykladowcy.php">Wykładowcy</a>
            <a href="plan.php">Plan wykładów</a>
        </nav>

        <a href="logout.php" class="logout-btn">
            Wyloguj się
        </a>

    </header>

    <main class="dashboard-content">
        <h2>NN</h2>
        <p>NN</p>
    </main>

</div>

</body>
</html>
