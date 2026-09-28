<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bokningar | Barber</title>

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
                <a href="/bookings">Bokningar</a>

                <form action="/logout" method="POST">
                    <button type="submit" class="logout-button">
                    Logga ut
                    </button>
                </form>
            </div>

        </nav>
    </header>


    <!-- BOKNINGAR -->
    <main class="bookings-page">

        <div class="bookings-heading">

            <p class="subtitle">
                ADMIN
            </p>

            <h1>Bokningar</h1>

            <p>
                Här ser du alla inbokade kunder.
            </p>

        </div>


        <div class="bookings-list">

            <?php if (empty($bookings)) : ?>

                <p>Det finns inga bokningar ännu.</p>

            <?php else : ?>

                <?php foreach ($bookings as $booking) : ?>

                    <div class="booking-item">

                        <div class="booking-date">
                            <strong>
                                <?= htmlspecialchars($booking['booking_date']) ?>
                            </strong>

                            <span>
                                <?= substr($booking['booking_time'], 0, 5) ?>
                            </span>
                        </div>


                        <div class="booking-customer">

                            <strong>
                                <?= htmlspecialchars($booking['customer_name']) ?>
                            </strong>

                            <span>
                                <?= htmlspecialchars($booking['customer_email']) ?>
                            </span>

                        </div>


                        <div class="booking-service">

                            <span>Behandling</span>

                            <strong>
                                <?= htmlspecialchars($booking['service_name']) ?>
                            </strong>

                        </div>

                        <div class="booking-actions">

                          <form action="/bookings/delete" method="POST">

                              <input
                                  type="hidden"
                                  name="id"
                                  value="<?= $booking['id'] ?>">

                              <button type="submit" class="delete-button">
                                  Ta bort
                              </button>

                          </form>

                        </div>

                    </div>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>

    </main>

</body>

</html>