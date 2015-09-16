<?php
// Set up the database connection
$dsn = 'mysql:host=localhost;dbname=RMproject';
$username = 'root';
$password = '0123456';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('util/db_error_connect.php');
    exit();
}
?>