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
    <title>Wykładowcy</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="search-page">

    <div class="search-box">

        <h1>Wyszukiwarka wykładowców</h1>

        <input
            type="text"
            id="searchInput"
            class="google-search"
            placeholder="Wpisz wykładowcę, salę, przedmiot..."
            autocomplete="off"
        >

        <div id="results" class="live-results"></div>

        <a href="dashboard.php" class="back-btn">
            Wróć do panelu
        </a>

    </div>

</div>

<script src="wykladowcy.js"></script>

</body>
</html>