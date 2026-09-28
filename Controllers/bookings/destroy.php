<?php

if (!isset($_SESSION['admin'])) {
    header('Location: /login');
    exit();
}

$config = require base_path('config.php');

$db = new Database($config['database']);

$id = $_POST['id'];

$db->query(
    'DELETE FROM bookings WHERE id = :id',
    [
        'id' => $id
    ]
);

header('Location: /bookings');

exit();