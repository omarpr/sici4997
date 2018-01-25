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

if (isset($_SESSION['userID'])) {
    $loggedUser = User::loadFromID($_SESSION['userID']);
    
    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    }
}

include './parts/header.php';

if ($action == 'login') {
    include './parts/login.php';
} else if ($action == 'logout') {
    session_destroy();
    header('Location: index.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);
    
    if (is_null($u)) {
        showError('The user doesn\'t exist.');
        include './parts/login.php';
    } else if ($u->validatePassword($_POST['password'])) {
        $_SESSION['userID'] = $u->id;
        $_SESSION['loginTime'] = time();
        header('Location: index.php');
    } else {
        showError('The entered password is incorrect!');
        include './parts/login.php';
    }
} else {
    include './parts/body.php';
}

include './parts/footer.php';

echo '<pre>' . print_r($_SESSION, true)  . '</pre>';
if (isset($_SESSION['loginTime'])) {
    echo '<pre>' . date('d-M-Y H:m:s', $_SESSION['loginTime']) . '</pre>';
}

function showError($msg) {
    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
}

?>