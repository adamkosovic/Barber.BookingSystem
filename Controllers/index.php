<?php

$config = require base_path('config.php');

$db = new Database($config['database']);

$services = $db->query('SELECT * FROM services')->fetchAll();

view('index.view.php', [
  'services' => $services
]);