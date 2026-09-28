<?php

$config = require base_path('config.php');

$db = new Database($config['database']);

$email = $_POST['email'];
$password = $_POST['password'];

$admin = $db->query(
  'SELECT * FROM admins WHERE email = :email',
  [
    'email' => $email
  ]
)->fetch();

if($admin && password_verify($password, $admin['password'])) {
  $_SESSION['admin'] = [
    'id' => $admin['id'],
    'email' => $admin['email']
  ];

  header('Location: /bookings');
  exit();
}

$_SESSION['error'] = 'Fel e-post eller lösenord.';

header('Location: /login');
exit();
