<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

require base_path('routes.php');