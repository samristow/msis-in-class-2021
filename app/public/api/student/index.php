<?php
// require 'common.php';
require 'class/DbConnection.php';

// Step 1: Get a datase connection from our helper class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$sql = 'SELECT * FROM student';
$vars = [];

if (isset($_GET['student'])) {
   //This is an example of a parameterized query
   $sql = 'SELECT * FROM offer WHERE studentId = ?';
    $vars = [ $_GET['student'] ];
    /*parameterized query
    parameterized queries prevents sql injection
    in top 5 website security issues
    */

}

$stmt = $db->prepare($sql);
$stmt->execute($vars);

$students = $stmt->fetchAll();

// Step 3: Convert to JSON
$json = json_encode($students, JSON_PRETTY_PRINT);

// Step 4: Output
header('Content-Type: application/json');
echo $json;