<?php

$error = $_SESSION['error'] ?? null;

unset($_SESSION['error']);

view('login/create.view.php', [
    'error' => $error
]);