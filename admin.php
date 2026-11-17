<?php
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
</head>
<body>
    <h1>Witaj, <?=htmlspecialchars($_SESSION['uzytkownik'])?></h1>
    <p><a href="wyloguj.php">Wyloguj</a></p>
</body>
</html>