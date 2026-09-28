<?php

$config = require base_path('config.php');

$db = new Database($config['database']);

$name = $_POST['name'];
$email = $_POST['email'];
$serviceId = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];

$existingBooking = $db->query(
    'SELECT * FROM bookings
    WHERE booking_date = :date
    AND booking_time = :time',
    [
        'date' => $date,
        'time' => $time
    ]
)->fetchAll();

if($existingBooking){
    die('Den här bokning är redan bokad.');
}

$db->query(
    'INSERT INTO bookings (customer_name, customer_email, service_id, booking_date, booking_time)
     VALUES (:name, :email, :service_id, :date, :time)',
    [
        'name' => $name,
        'email' => $email,
        'service_id' => $serviceId,
        'date' => $date,
        'time' => $time
    ]
);

header(
    'Location: /bookings/confirmation?' . 
    http_build_query([
        'name' => $name,
        'date' => $date,
        'time' => $time
    ])
);

exit();