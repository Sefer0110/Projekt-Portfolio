<?php
    //hämtar data från formuläret
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $subject = $_POST["subject"] ?? "";
    $reply = $_POST["reply"] ?? "";
    $message = $_POST["message"] ?? "";
    ?> 
    
    <!DOCTYPE html>
    <html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tack - Kapten Snetand</title>
    <meta name="description" content="Bekräftelse på ditt meddelande till Kapten Snetand.">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>

<header class="header">
        <nav class="header__nav" aria-label="Huvudmeny">
            <ul class="header__nav-list">
                <li class="header__nav-item">
                    <a href="index.html" class="header__nav-link">Om mig</a>
                </li>
                <li class="header__nav-item">
                    <a href="kompetenser.html" class="header__nav-link">Kompetenser</a>
                </li>
                <li class="header__nav-item">
                    <a href="projekt.html" class="header__nav-link">Projekt</a>
                </li>
                <li class="header__nav-item">
                    <a href="utbildning.html" class="header__nav-link">Utbildning</a>
                </li>
                <li class="header__nav-item">
                    <a href="kontakt.html" class="header__nav-link">Kontakt</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="confirmation">
        <h1 class="confirmation__title">Tack för ditt meddelande!</h1>

        <p class="confirmation__text">
            Hej <?php echo htmlspecialchars($name); ?>!
        </p>

        <p class="confirmation__text">
            Tack för att du kontaktade Kapten Snetand.
            Här är en sammanfattning av ditt meddelande.
        </p>

        <section class="confirmation__section">
            <h2 class="confirmation__subtitle">Dina uppgifter</h2>

            <p class="confirmation__text">
                Namn: <?php echo htmlspecialchars($name); ?>
            </p>

            <p class="confirmation__text">
                E-post: <?php echo htmlspecialchars($email); ?>
            </p>

            <p class="confirmation__text">
                Ämne: <?php echo htmlspecialchars($subject); ?>
            </p>

            <p class="confirmation__text">
                Vill du ha svar? <?php echo htmlspecialchars($reply); ?>
            </p>

            <p class="confirmation__text">
                Meddelande: <?php echo htmlspecialchars($message); ?>
            </p>
        </section>

        <p class="confirmation__text">
            <a class="confirmation__link" href="kontakt.html">
                Tillbaka till kontaktsidan
            </a>
        </p>
    </main>

    <footer class="footer">
        <p class="footer__text">&copy; 2026 Kapten Snetand</p>
    </footer>

</body>
</html>