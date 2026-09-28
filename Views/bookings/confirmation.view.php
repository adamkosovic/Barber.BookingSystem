<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bokning bekräftad | Barber</title>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <header class="header">
        <nav class="navbar">

            <a href="/" class="logo">
                BARBER<span>.</span>
            </a>

            <div class="nav-links">
                <a href="/">Hem</a>
                <a href="/bookings/create">Boka tid</a>
                <a href="/login">Logga in</a>
            </div>

        </nav>
    </header>


    <main class="confirmation-page">

        <div class="confirmation-card">

            <p class="subtitle">
                BOKNING BEKRÄFTAD
            </p>

            <h1>Din tid är bokad!</h1>

            <p>
                Tack <?= htmlspecialchars($name ?? '') ?>, vi ses snart!
            </p>

            <div class="confirmation-details">

                <div>
                    <span>Datum</span>
                    <strong>
                        <?= htmlspecialchars($date ?? '') ?>
                    </strong>
                </div>

                <div>
                    <span>Tid</span>
                    <strong>
                        <?= htmlspecialchars($time ?? '') ?>
                    </strong>
                </div>

            </div>

            <a href="/" class="button">
                Till startsidan
            </a>

        </div>

    </main>

</body>

</html>