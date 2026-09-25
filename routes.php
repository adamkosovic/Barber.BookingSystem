<?php

if($uri === '/' && $method === 'GET') {
  require base_path('Controllers/index.php');
} elseif($uri === '/bookings' && $method === 'GET'){
  require base_path('Controllers/bookings/index.php');
} elseif($uri === '/bookings/create' && $method === 'GET'){
  require base_path('Controllers/bookings/create.php');
} elseif($uri === '/bookings' && $method === 'POST'){
  require base_path('controllers/bookings/store.php');
} else {
  abort();
}

