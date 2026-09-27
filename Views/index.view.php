<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Barber Booking</title>

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


    <!-- HERO -->
    <main>

        <section class="hero">

            <div class="hero-content">

                <p class="subtitle">
                    BARBER SHOP
                </p>

                <h1>
                    Din stil.<br>
                    Din tid.
                </h1>

                <p class="hero-text">
                    Professionell klippning och skäggvård.
                    Boka din nästa tid snabbt och enkelt online.
                </p>

                <a href="/bookings/create" class="button">
                    Boka tid
                </a>

            </div>


            <div class="hero-image">
                <img
                    src="/images/barber2.jpeg"
                    alt="Barberare som trimmar skägg">
            </div>

        </section>


        <!-- TJÄNSTER -->
        <section class="services-section">

            <div class="section-heading">

                <p class="subtitle">
                    VÅRA TJÄNSTER
                </p>

                <h2>
                    Vad behöver du?
                </h2>

            </div>


            <div class="service-cards">
              <?php foreach($services as $service) : ?>
                <div class="service-card">
                  <h3>
                    <?= htmlspecialchars($service['name']) ?>
                  </h3>

                  <p>
                    Professionell behandling anpassad efter dig.
                  </p>

                  <div class="service-info">
                    <span>
                      <?= $service['duration'] ?> min
                    </span>

                    <strong>
                      <?= $service['price'] ?> kr
                    </strong>

                  </div>

                </div>
                
              <?php endforeach; ?>

            </div>

        </section>


        <!-- BILDSEKTION -->
        <section class="experience">

            <div class="experience-image">
                <img
                    src="/images/barber.jpg"
                    alt="Interiör från barbershop">
            </div>


            <div class="experience-content">

                <p class="subtitle">
                    BARBER EXPERIENCE
                </p>

                <h2>
                    Mer än bara<br>
                    en klippning.
                </h2>

                <p>
                    Vi kombinerar klassiskt barberarhantverk
                    med en modern upplevelse. Välj behandling,
                    hitta en tid som passar och boka direkt online.
                </p>

                <a href="/bookings/create" class="text-link">
                    Boka din tid →
                </a>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="footer">

        <a href="/" class="footer-logo">
            BARBER<span>.</span>
        </a>

        <p>
            © 2026 Barber Booking
        </p>

    </footer>

</body>

</html>