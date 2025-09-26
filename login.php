<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f5f8fc;
    }

    .container {
      display: flex;
      width: 900px;
      max-width: 95%;
      background: #fff;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    /* Left panel */
    .left {
      flex: 1;
      background: linear-gradient(135deg, #4a90e2, #357bd8);
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 40px;
      text-align: center;
    }

    .left h1 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    .left p {
      font-size: 16px;
      opacity: 0.9;
    }

    /* Right panel */
    .right {
      flex: 1;
      padding: 50px 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }

    .logo {
      max-width: 140px;
      margin: 0 auto 15px auto;
    }

    h2 {
      font-size: 22px;
      margin-bottom: 25px;
      color: #2c3e50;
    }

    .input-group {
      margin-bottom: 18px;
      text-align: left;
    }

    .input-group label {
      font-weight: 600;
      margin-bottom: 6px;
      display: block;
      color: #333;
    }

    .input-group input {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #ccc;
      font-size: 15px;
      outline: none;
      transition: 0.3s;
    }

    .input-group input:focus {
      border-color: #4a90e2;
      box-shadow: 0 0 0 3px rgba(74,144,226,0.2);
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      font-size: 14px;
    }

    .options a {
      color: #4a90e2;
      text-decoration: none;
    }

    .options a:hover {
      text-decoration: underline;
    }

    button {
      width: 100%;
      padding: 14px;
      background: #4a90e2;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #357bd8;
    }

    .register {
      margin-top: 25px;
      text-align: center;
      font-size: 14px;
    }

    .register a {
      color: #4a90e2;
      text-decoration: none;
      font-weight: 600;
    }

    .register a:hover {
      text-decoration: underline;
    }

    @media(max-width: 768px) {
      .container {
        flex-direction: column;
      }
      .left {
        display: none;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <!-- Left section -->
  <div class="left">
    <h1>Welcome to ProgressUp!</h1>
    <p>Boost your career with our professional training programs.</p>
  </div>

  <!-- Right section -->
  <div class="right">
    <img src="img/logo.png" alt="Logo" class="logo">

    <h2>Login to Your Account</h2>

    <form action="process_login.php" method="POST">
      <div class="input-group">
        <label for="username">Email or Username</label>
        <input type="text" id="username" name="username" required>
      </div>

      <div class="input-group">
        <label for="password">Password <a href="forget_password.php">(Forgotten password?)</a></label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="options">
        <label><input type="checkbox" name="remember"> Keep me logged in</label>
      </div>

      <button type="submit">Login</button>
    </form>

    <div class="register">
      <p>Not registered yet? <a href="register.php">Create an account</a></p>
    </div>
  </div>
</div>

</body>
</html>
