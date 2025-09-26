<?php
session_start();
require_once "config.php"; // include database connection

$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);

    if (!empty($email)) {
        // Check if user exists
        $stmt = $pdo->prepare("SELECT id, email FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user) {
            // Generate secure token and expiration
            $token = bin2hex(random_bytes(16));
            $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

            // Insert token into password_resets table
            $stmt = $pdo->prepare("INSERT INTO password_resets (user_id, token, expires_at) VALUES (?, ?, ?)");
            $stmt->execute([$user['id'], $token, $expires]);

            // Create reset link
            $resetLink = "http://localhost/progress_center/reset_password.php?token=" . $token;

            // Send email (replace with PHPMailer for production)
            $subject = "Password Reset Request";
            $message = "Hello,\n\nClick the link below to reset your password:\n$resetLink\n\nThis link will expire in 1 hour.";
            $headers = "From: no-reply@progress_center.com";

            mail($email, $subject, $message, $headers);

            $msg = "We sent a reset link to your email.";
        } else {
            $msg = "No account found with this email.";
        }
    } else {
        $msg = "Please enter your email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4 rounded-4" style="width: 380px;">
        <h3 class="text-center mb-4">Forgot Password</h3>

        <?php if (!empty($msg)): ?>
            <div class="alert alert-info"><?php echo htmlspecialchars($msg); ?></div>
        <?php endif; ?>

        <form method="post" novalidate>
            <div class="mb-3">
                <label for="email" class="form-label">Enter your email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Reset Link</button>
        </form>
    </div>
</div>

</body>
</html>
