<?php

if($uri === '/') {
  require base_path('Controllers/index.php');
} elseif($uri === '/bookings'){
  require base_path('Controllers/bookings/index.php');
} elseif($uri === '/bookings/create'){
  require base_path('Controllers/bookings/create.php');
} else {
  abort();
}

