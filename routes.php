<?php

$router->get('/', 'controllers/index.php');

$router->get('/bookings', 'controllers/bookings/index.php');

$router->get('/bookings/create', 'controllers/bookings/create.php');


$router->get(
  '/bookings/available-times',
  'controllers/bookings/available-times.php'
);

$router->get('/bookings/confirmation',
  'controllers/bookings/confirmation.php'
);

$router->post('/bookings', 'controllers/bookings/store.php');






