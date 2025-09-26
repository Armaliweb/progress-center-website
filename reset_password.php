<?php
require_once "config.php";

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $stmt = $pdo->prepare("SELECT * FROM password_resets WHERE token = ? AND expires_at > NOW()");
    $stmt->execute([$token]);
    $reset = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$reset) {
        die("Invalid or expired token.");
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $password = $_POST['password'];
        $confirm = $_POST['confirm_password'];

        if ($password === $confirm) {
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
            $stmt->execute([$hashed, $reset['user_id']]);

            $pdo->prepare("DELETE FROM password_resets WHERE token = ?")->execute([$token]);

            header("Location: login.php?reset=success");
            exit();
        } else {
            $msg = "Passwords do not match.";
        }
    }
} else {
    die("No token provided.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4 rounded-4" style="width: 380px;">
        <h3 class="text-center mb-4">Reset Password</h3>

        <?php if (!empty($msg)): ?>
            <div class="alert alert-danger"><?php echo $msg; ?></div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm New Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Reset Password</button>
        </form>
    </div>
</div>

</body>
</html>
