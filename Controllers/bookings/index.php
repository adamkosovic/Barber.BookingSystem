<?php

$config = require base_path('config.php');

$db = new Database($config['database']);

$bookings = $db->query('
    SELECT * FROM bookings
  ')->fetchAll();

view('bookings/index.view.php', [
  'bookings' => $bookings
]);