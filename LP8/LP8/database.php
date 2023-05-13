<?php
$dsn = 'mysql:host=localhost;dbname=employees';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('error.php');
    exit();
}
?>