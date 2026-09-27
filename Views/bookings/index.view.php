<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bokningar</title>
</head>
<body>
  <h1>Bokningar</h1>

  <?php foreach($bookings as $booking) : ?>
    <div>
      <p>Name: <?= $booking['customer_name'] ?></p>
      <p>E-post: <?= $booking['customer_email'] ?></p>
      <p>Datum:<?= $booking['booking_date'] ?></p>
      <p>Tid:<?= $booking['booking_time'] ?></p>
    </div>

    <hr>
  <?php endforeach; ?>

  <a href="/">Tillbaka till startsidan</a>
  
</body>
</html>