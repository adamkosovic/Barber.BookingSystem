<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Boka tid | Barber</title>

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


    <!-- BOKNINGSFORMULÄR -->
    <main class="booking-page">

        <div class="booking-heading">

            <p class="subtitle">
                BOKA ONLINE
            </p>

            <h1>Boka din tid</h1>

            <p>
                Välj behandling och en tid som passar dig.
            </p>

        </div>


        <div class="booking-card">

            <form action="/bookings" method="POST" class="booking-form">

                <!-- BEHANDLING -->
                <div class="form-group">

                    <label for="service">
                        Behandling
                    </label>

                    <select id="service" name="service" required>

                        <option value="">
                            Välj behandling
                        </option>

                        <?php foreach ($services as $service) : ?>

                            <option value="<?= $service['id'] ?>">
                                <?= htmlspecialchars($service['name']) ?>
                                - <?= $service['price'] ?> kr
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- DATUM OCH TID -->
                <div class="form-row">

                    <div class="form-group">

                        <label for="date">
                            Datum
                        </label>

                        <input
                            type="date"
                            id="date"
                            name="date"
                            required>

                    </div>


                    <div class="form-group">

                        <label for="time">
                            Tid
                        </label>

                        <select
                            name="time"
                            id="time"
                            required
                            disabled>

                            <option value="">
                                Välj datum först
                            </option>

                        </select>

                    </div>

                </div>


                <div class="form-divider"></div>


                <h2>Dina uppgifter</h2>


                <!-- NAMN -->
                <div class="form-group">

                    <label for="name">
                        Namn
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Ditt namn"
                        required>

                </div>


                <!-- E-POST -->
                <div class="form-group">

                    <label for="email">
                        E-post
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="namn@email.se"
                        required>

                </div>


                <button type="submit" class="booking-button">
                    Boka tid
                </button>

            </form>

        </div>

    </main>


    <script>

        // Hämtar datumfältet
        const dateInput = document.querySelector('#date');

        // Hämtar dropdown-menyn för tider
        const timeSelect = document.querySelector('#time');

        const times = <?= json_encode($times) ?>;

        // Körs när kunden väljer ett datum
        dateInput.addEventListener('change', async function () {

            // Hämtar datumet som kunden valt
            const date = dateInput.value;


            // Frågar PHP vilka tider som redan är bokade
            const response = await fetch(
                `/bookings/available-times?date=${date}`
            );


            // Gör JSON-svaret till en JavaScript-array
            const bookedTimes = await response.json();


            // Tömmer dropdown-menyn
            timeSelect.innerHTML = '';


            // Skapar första alternativet
            const defaultOption = document.createElement('option');

            defaultOption.value = '';
            defaultOption.textContent = 'Välj tid';

            timeSelect.appendChild(defaultOption);


            // Går igenom alla bokningstider
            times.forEach(function (time) {

                // Kontrollerar om tiden redan är bokad
                if (!bookedTimes.includes(time)) {

                    // Skapar ett nytt option-element
                    const option = document.createElement('option');

                    option.value = time;
                    option.textContent = time;

                    // Lägger tiden i dropdown-menyn
                    timeSelect.appendChild(option);
                }

            });


            // Gör dropdown-menyn klickbar
            timeSelect.disabled = false;

        });

    </script>

</body>

</html>