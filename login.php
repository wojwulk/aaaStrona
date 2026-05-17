<?php
session_start();

$filename = "users.json";

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

if (!file_exists($filename)) {
    header("Location: index.php?error=1");
    exit;
}

$users = json_decode(file_get_contents($filename), true);

foreach ($users as $user) {

    if (
        $user["username"] === $username &&
        password_verify($password, $user["password"])
    ) {

        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
        exit;
    }
}

header("Location: index.php?error=1");
exit;
?>