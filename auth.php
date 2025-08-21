<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

if ($action === 'register') {
    $title = "Register";
    $formAction = "src/register.php";
    $buttonText = "Daftar";
    $bottomText = 'Sudah punya akun? <a href="auth.php?action=login">Login di sini</a>';
} else {
    $title = "Login";
    $formAction = "src/login.php";
    $buttonText = "Login";
    $bottomText = 'Belum punya akun? <a href="auth.php?action=register">Daftar di sini</a>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A3 Privat</title>
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div class="login-container">
        <h2><?= $title ?></h2>
        <?php if (isset($_SESSION['error'])): ?>
            <p class="text-info">
                <?= $_SESSION['error'];
                unset($_SESSION['error']); ?>
            </p>
        <?php endif; ?>
        <form method="POST" action="<?= $formAction ?>">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <?php if ($action === 'register'): ?>
                <label for="repassword">Confirm Password</label>
                <input type="password" name="repassword" id="repassword" required>
            <?php endif; ?>

            <button type="submit"><?= $buttonText ?></button>
        </form>
        <div class="register-link">
            <p><?= $bottomText ?></p>
        </div>
    </div>
</body>

</html>