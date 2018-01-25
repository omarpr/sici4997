<?php

session_start();
date_default_timezone_set('EST');

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

echo '<pre>' . print_r($_SESSION, true)  . '</pre>';
echo '<pre>' . date('d-M-Y H:m:s', $_SESSION['loginTime']) . '</pre>';

if (isset($_SESSION['userID'])) {
    //$loggedUser = User::loadFrom
}

if ($action == 'login') {
    include './parts/login.php';
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);
    
    if (is_null($u)) {
        showError('The user doesn\'t exist.');
        include './parts/login.php';
    } else if ($u->validatePassword($_POST['password'])) {
        $_SESSION['userID'] = $u->id;
        $_SESSION['loginTime'] = time();
    } else {
        showError('The entered password is incorrect!');
        include './parts/login.php';
    }
} else {
    include './parts/body.php';
}

include './parts/footer.php';

function showError($msg) {
    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
}

?>