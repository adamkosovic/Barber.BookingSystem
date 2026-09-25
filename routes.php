<?php

$router->get('/', 'controllers/index.php');

$router->get('/bookings', 'controllers/bookings/index.php');

$router->get('/bookings/create', 'controllers/bookings/create.php');

$router->post('/bookings', 'controllers/bookings/store.php');






