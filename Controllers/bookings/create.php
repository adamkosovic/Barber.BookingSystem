<?php

$config = require base_path('config.php');

$db = new Database($config['database']);

$services = $db->query('SELECT * FROM services')->fetchAll();

view('bookings/create.view.php', [
  'services' => $services
]);