<?php
session_start();

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login-page">
    
    <div class="login-box">

        <img src="logo.png" class="logo" alt="logo">

        <h2>Logowanie</h2>

        <?php if (isset($_GET["error"])): ?>
            <div class="error-box">
                Nieprawidłowy login lub hasło
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST" onsubmit="return validateForm()">

            <input
                type="text"
                name="username"
                id="username"
                placeholder="Login"
            >

            <input
                type="password"
                name="password"
                id="password"
                placeholder="Hasło"
            >

            <p id="error"></p>

            <button type="submit">
                Zaloguj się
            </button>

            <a href="register.php">
                Nie masz konta? Zarejestruj się
            </a>

        </form>

    </div>

    <script src="script.js"></script>

</body>
</html>