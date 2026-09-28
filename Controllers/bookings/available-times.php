<?php

$config = require base_path('config.php');

$db = new Database($config['database']);

$date = $_GET['date'] ?? null;

$bookedTimes = [];

if($date){
  $bookings = $db->query(
    'SELECT booking_time FROM bookings WHERE booking_date = :date',
    [
      'date' => $date
    ]
  )->fetchAll();

  foreach($bookings as $booking){
    $bookedTimes[] = substr($booking['booking_time'], 0, 5);
  }
}

header('Content-Type: application/json');

echo json_encode($bookedTimes);