<?php

$dbHostname = 'localhost';
$dbDatabase = 'omar';
$dbUsername = 'omar';
$dbPassword = 'sici4997';

$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);

//queryOne();
//queryTwo();
//queryThree();

$records = getResultFromSQL('SELECT * FROM user');
echo '<pre>' . print_r($records, true) . '</pre>';

$records = getResultFromSQL('SELECT * FROM user WHERE username = ?', ['ctk']);
echo '<pre>' . print_r($records, true) . '</pre>';

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
    //$id = '1; truncate table user;';
    $id = 1;
    $sql = 'SELECT * FROM user WHERE id = ' . $id;
    
    foreach ($db->query($sql) as $rec) {
        echo '<pre>' . print_r($rec, true) . '</pre>';
    }
}

function queryThree() {
    global $db;
    
    // SQL Injection Example
    $id = '1; truncate table user;';
    //$id = 1;
    
    $sql = 'SELECT * FROM user WHERE id = ?';
    $stmt = $db->prepare($sql);
    
    $stmt->execute([$id]);
    
    foreach ($stmt->fetchAll() as $rec) {
        echo '<pre>' . print_r($rec, true) . '</pre>';
    }
}

function getResultFromSQL($sql, $values = []) {
    global $db;
    
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    
    return $stmt->fetchAll();
}

?>