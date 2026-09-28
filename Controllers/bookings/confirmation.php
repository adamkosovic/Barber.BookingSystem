<?php

$name = $_GET['name'] ?? null;
$date = $_GET['date'] ?? null;
$time = $_GET['time'] ?? null;

view('bookings/confirmation.view.php', [
    'name' => $name,
    'date' => $date,
    'time' => $time
]);