<?php
$firma= 'Szprycha';
$rok= date('Y');
$cennik=[
    ['nazwa' => 'Przegląd', 'cena'=>120],
    ['nazwa' => 'Serwis hamulców', 'cena'=>180],
    ['nazwa' => 'Ustaweinie siodełka', 'cena'=>50],
    ['nazwa' => 'Załatanie koła', 'cena'=>80],
    ['nazwa' => 'Nasmarowanie łańcucha', 'cena'=>20]
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szprycha - serwis rowerowy</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
    <header class="site-header">
        <a class="logo" href="#">
            <svg viewBox="0 0 120 64" width="72" height="38" role="img" aria-labelledby="logo-tytul">
                <title id="logo-tytul">Szprycha</title>
                <circle cx="28" cy="42" r="18" fill="none" stroke="#f97316" stroke-width="5"/>
                <circle cx="92" cy="42" r="18" fill="none" stroke="#f97316" stroke-width="5"/>
                <polyline points="28,42 48,14 80,14 92,42" fill="none" stroke="#f97316" stroke-width="5"/>
                <polyline points="48,14 60,42 80,14" fill="none" stroke="#f97316" stroke-width="5"/>
            </svg>
            <span>Szprycha</span>
        </a>

        <button class="menu-toggle" aria-expanded="false">Menu</button>
        <nav class="menu">
            <a href="#uslugi">Usługi</a>
            <a href="#cennik">Cennik</a>
            <a href="#kontakt">Kontakt</a>
        </nav>
    </header>
    <main>
        <section id="uslugi">
            <h2>Usługi</h2>
            <div class="cards">
                <article class="card card--highlight">
                    <h3>Przegląd</h3>
                    <p class="badge">Najczęściej wybierane</p>
                    <p>Hamulce i przerzutki</p>
                    <p class="card__price">od 120 zł</p>
                </article>
                <article class="card">
                    <h3>Serwis hamulców</h3>
                    <p>Wymiana klocków hamulcowych</p>
                    <p class="card__price">od 180 zł</p>
                </article>
                <article class="card">
                    <h3>Ustawienie siodełka</h3>
                    <p>Dostosowanie wysokości siodełka do klienta</p>
                    <p class="card__price">od 50 zł</p>
                </article>
            </div>
        </section>
        <section id="cennik">
            <h2>Cennik</h2>
            <table class="price-table">
                <thead>
                    <tr><th>Usługa</th><th class="num">Cena</th></tr>
                </thead>
                <tbody>
                    <?php foreach($cennik as $usluga): ?>
                    <tr>
                        <td><?= htmlspecialchars($usluga['nazwa']) ?></td>
                        <td><?= $usluga['cena'] ?> zł</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer id="kontakt">
        <p>&copy; <?= $rok?> <?= $firma?></p>
        <p>adres: Bydgoszcz ul. Jagielonów 19/2</p>
        <p><a href="tel:+48500100200">tel: 500 100 200</a></p>
        <p><a href="mailto:szprycha.byd@gmail.com">mail: szprycha.byd@gmail.com</a></p>
    </footer>
</body>
</html>
