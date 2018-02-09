<?php

date_default_timezone_set('EST');

$action = (isset($_GET['a'])) ? $_GET['a'] : '';

include 'db.php';
include './classes/User.php';

if ($action == 'isUsernameAvailable') {
    $username = $_GET['u'] ?? '';
    
    $out = ['available' => true];
    $user = User::loadFromUsername($username);
    
    if ($user != null) {
        $out['available'] = false;
    }
    
    header('Content-type: application/json');
    echo json_encode($out);
}

?>