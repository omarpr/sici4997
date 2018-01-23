<?php

$data = [
         ['username' => 'omarpr',
          'password' => 'test',
          'email' => 'omarpr@gmail.com'],
         ['username' => 'ctk',
          'password' => 'test2',
          'email' => 'ctk@apple.com'],
         ];

$action = (isset($_GET['a'])) ? $_GET['a'] : '';

include './parts/header.php';

if ($action == 'login') {
    include './parts/login.php';
} else {
    include './parts/body.php';
}

include './parts/footer.php';


?>