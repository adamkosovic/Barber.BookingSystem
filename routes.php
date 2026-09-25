<?php

if($uri === '/') {
  require base_path('controllers/index.php');
} else {
  abort();
}

