<?php

if (!isset($_SESSION['admin'])) {
    header('Location: /login');
    exit();
}

$config = require base_path('config.php');

$db = new Database($config['database']);

$date = $_GET['date'] ?? null;

if ($date) {

    $bookings = $db->query(
        'SELECT
            bookings.*,
            services.name AS service_name
        FROM bookings
        JOIN services
            ON bookings.service_id = services.id
        WHERE bookings.booking_date = :date
        ORDER BY booking_time',
        [
            'date' => $date
        ]
    )->fetchAll();

} else {

    $bookings = $db->query(
        'SELECT
            bookings.*,
            services.name AS service_name
        FROM bookings
        JOIN services
            ON bookings.service_id = services.id
        ORDER BY booking_date, booking_time'
    )->fetchAll();

}

view('bookings/index.view.php', [
    'bookings' => $bookings,
    'date' => $date
]);