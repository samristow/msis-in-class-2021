<?php

require 'class/DbConnection.php';

echo 'test';

$db = DbConnection::getConnection();

$sql = 'SELECT * from Student';
$vars = [];


$stmt = $db->perpare($sql);
$stmt->execute($vars);

$patients = $stmt->fetchALL();

$json = json_encode($student, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $json;