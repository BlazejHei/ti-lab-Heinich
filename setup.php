<?php
require_once 'baza.php';

$pdo->exec('CREATE TABLE IF NOT EXISTS uzytkownicy (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    login TEXT NOT NULL UNIQUE,
    haslo_hash TEXT NOT NULL 
)');

$pdo->exec('CREATE TABLE IF NOT EXISTS uslugi (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nazwa TEXT NOT NULL UNIQUE,
    cena INTEGER NOT NULL
)');

$insert=$pdo->prepare('INSERT OR IGNORE INTO uslugi (nazwa, cena) VALUES (:nazwa, :cena)');
$insert->execute(['nazwa'=>'Przegląd','cena'=>120]);
$insert->execute(['nazwa'=>'Serwis hamulców','cena'=>180]);
$insert->execute(['nazwa'=>'Ustawienie siodełka','cena'=>50]);
$insert->execute(['nazwa'=>'Łatanie koła','cena'=>80]);

$z=$pdo->prepare('INSERT OR IGNORE INTO uzytkownicy (login, haslo_hash) VALUES (:login, :hash)');
$z->execute(['login'=>'admin',
'hash'=>password_hash('TwojeHaslo',PASSWORD_DEFAULT),]);

echo "Baza gotowa.\n";