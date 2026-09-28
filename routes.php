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

$router->post(
  '/bookings/delete',
  'controllers/bookings/destroy.php'
);

$router->post('/bookings', 'controllers/bookings/store.php');


//LOGIN
$router->get('/login', 'controllers/login/create.php');

$router->post('/login', 'controllers/login/store.php');

$router->post('/logout', 'controllers/login/destroy.php');





