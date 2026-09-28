<?php


if(!isset($_SESSION['admin'])) {
  header('Location: /login');
  exit();
}

$config = require base_path('config.php');

$db = new Database($config['database']);

$bookings = $db->query(
  'SELECT
      bookings.*,
      services.name AS service_name
  FROM bookings
  JOIN services
      ON bookings.service_id = services.id
  ORDER BY booking_date, booking_time'
)->fetchAll();

view('bookings/index.view.php', [
  'bookings' => $bookings
]);