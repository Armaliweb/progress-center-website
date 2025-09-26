<?php
session_start();
require_once "config.php"; // PDO connection file

// Initialize error variable
$_SESSION['error'] = '';
$_SESSION['success'] = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirm_password = trim($_POST['confirm_password'] ?? '');

    // Basic validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "Please fill in all fields.";
        header("Location: register.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email address.";
        header("Location: register.php");
        exit();
    }

    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match.";
        header("Location: register.php");
        exit();
    }

    try {
        // Check if username or email already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);

        if ($stmt->rowCount() > 0) {
            $_SESSION['error'] = "Username or email already exists.";
            header("Location: register.php");
            exit();
        }

        // Hash password and insert new user
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role, created_at) VALUES (?, ?, ?, 'user', NOW())");
        $stmt->execute([$username, $email, $hashedPassword]);

        $_SESSION['success'] = "Registration successful! You can now log in.";
        header("Location: register.php");
        exit();

    } catch (PDOException $e) {
        $_SESSION['error'] = "Database error: " . $e->getMessage();
        header("Location: register.php");
        exit();
    }
} else {
    // If accessed directly, redirect to register page
    header("Location: register.php");
    exit();
}
