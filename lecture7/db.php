<?php

$dbHostname = 'localhost';
$dbDatabase = 'omar';
$dbUsername = 'omar';
$dbPassword = 'sici4997';

$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);

//queryOne();
queryTwo();

function queryOne() {
    global $db;
    $sql = 'SELECT * FROM user';
    
    foreach ($db->query($sql) as $rec) {
        echo '<pre>' . print_r($rec, true) . '</pre>';
    }
}

function queryTwo() {
    global $db;
    //$id = 1;
    // SQL Injection Example
    $id = '1; truncate table user;';
    $sql = 'SELECT * FROM user WHERE id = ' . $id;
    
    foreach ($db->query($sql) as $rec) {
        echo '<pre>' . print_r($rec, true) . '</pre>';
    }
}

?>