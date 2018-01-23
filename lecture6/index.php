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

include './classes/User.php';
include './parts/header.php';

if ($action == 'login') {
    include './parts/login.php';
} else if ($action == 'doLogin') {
    //echo 'LOGIN!!!!';
    //echo '<pre>' . print_r($_POST, true) . '</pre>';
    $u = User::loadFromUsername($_POST['username']);
    
    if (is_null($u)) {
        // usuario no existe
        echo 'Usuario No Existe';
    } else if ($u->validatePassword($_POST['password'])) {
        // lo conecto
        echo 'Te conectas';
    } else {
        // password es incorrecto
        echo 'Password malo.';
    }
} else {
    include './parts/body.php';
}

include './parts/footer.php';


?>