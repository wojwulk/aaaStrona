<?php
$filename = "users.json";

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

if ($username == "" || $password == "") {
    die("Wypełnij wszystkie pola.");
}

if (!file_exists($filename)) {
    file_put_contents($filename, json_encode([]));
}

$users = json_decode(file_get_contents($filename), true);

foreach ($users as $user) {
    if ($user["username"] === $username) {
        die("Użytkownik już istnieje.");
    }
}

$newUser = [
    "username" => $username,
    "password" => password_hash($password, PASSWORD_DEFAULT)
];

$users[] = $newUser;

file_put_contents($filename, json_encode($users, JSON_PRETTY_PRINT));

header("Location: index.php");
exit;
?>