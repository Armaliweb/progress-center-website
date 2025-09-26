<?php
session_start();
require_once "config.php"; // PDO connection file

// Clear previous messages
$_SESSION['error'] = '';
$_SESSION['registered'] = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Please fill in both fields.";
        header("Location: login.php");
        exit();
    }

    try {
        // Check user in database (username or email)
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Redirect to index.php on success
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error'] = "Invalid username/email or password.";
            header("Location: login.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Database error: " . $e->getMessage();
        header("Location: login.php");
        exit();
    }
} else {
    // Redirect if accessed directly
    header("Location: login.php");
    exit();
}
