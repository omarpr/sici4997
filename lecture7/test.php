<?php

// Connection
$db = new PDO('mysql:host=localhost;dbname=omar;charset=utf8', 'omar', 'sici4997');

// Regular Query
$sql = 'SELECT * FROM test';

foreach ($db->query($sql) as $row) {
    echo '<pre>' . print_r($row, true) . '</pre>';
}

// Prepared Query
$sql = 'SELECT * FROM test WHERE id = ?';

$stmt = $db->prepare($sql);
$stmt->execute([1]);

echo 'Rows: ' . $stmt->rowCount() . '<br />';
foreach ($stmt->fetchAll() as $row) {
    echo '<pre>' . print_r($row, true) . '</pre>';
}

?>