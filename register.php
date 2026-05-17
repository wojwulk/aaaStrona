<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="box">
        <h2>Rejestracja</h2>

        <form action="save_user.php" method="POST" onsubmit="return validateRegister()">

            <input type="text" name="username" id="registerUsername" placeholder="Login">

            <input type="password" name="password" id="registerPassword" placeholder="Hasło">

            <input type="password" id="repeatPassword" placeholder="Powtórz hasło">

            <p id="registerError"></p>

            <button type="submit">Utwórz konto</button>

        </form>

        <a href="index.php">Masz już konto? Zaloguj się</a>
    </div>

</div>

<script src="script.js"></script>
</body>
</html>