<?php 

function base_path($path)
{
  return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
  extract($attributes);

  require base_path('views/' . $path);
}

function abort($code = 404)
{
  http_response_code($code);

  view("{$code}.view.php");

  die();
}