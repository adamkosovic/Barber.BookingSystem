<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Logga in | Barber</title>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- NAVIGATION -->
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


    <!-- LOGIN -->
    <main class="login-page">

        <div class="login-card">

            <p class="subtitle">
                ADMIN
            </p>

            <h1>Logga in</h1>

            <p>
                Logga in för att hantera bokningar.
            </p>


            <!-- LOGINFORMULÄR -->
            <form action="/login" method="POST" class="login-form">

                <div class="form-group">

                    <label for="email">
                        E-post
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="admin@barber.se"
                        required>

                </div>


                <div class="form-group">

                    <label for="password">
                        Lösenord
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Ditt lösenord"
                        required>

                </div>

                            <!-- FELMEDDELANDE -->
                <?php if ($error) : ?>

                    <div class="login-error">
                        <?= htmlspecialchars($error) ?>
                    </div>

                <?php endif; ?>


                <button type="submit" class="booking-button">
                    Logga in
                </button>

            </form>

        </div>

    </main>

</body>

</html>