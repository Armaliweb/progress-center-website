<?php
$host = 'localhost';
$user = 'root';
$password = ''; // XAMPP default
$db = 'progress_center';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}
?>
