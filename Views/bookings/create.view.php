<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boka tid</title>
</head>
<body>

    <h1>Boka tid</h1>

    <form method="POST" action="/bookings">

        <div>
            <label for="name">Namn</label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="email">E-post</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="service">Behandling</label>
            <select id="service" name="service">
                <option value="">Välj behandling</option>

                <?php foreach($services as $services) : ?>
                    <option value="<?= $services['id'] ?>">
                        <?= $services['name'] ?> - <?= $services['price'] ?> kr
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label for="date">Datum</label>
            <input type="date" id="date" name="date">
        </div>

        <div>
        <div>
            <label for="time">Välj tid</label>

            <select id="time" name="time">
                <option value="">Välj en tid</option>
                <option value="09:00">09:00</option>
                <option value="09:30">09:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
            </select>
        </div>
        </div>

        <button type="submit">Boka tid</button>

    </form>

</body>
</html>