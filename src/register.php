<?php
include 'db.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : '';

if ($password !== $repassword) {
    $_SESSION['error'] = "Password dan konfirmasi password tidak sama!";
    header("Location: ../auth.php?action=register");
    exit;
}

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['error'] = "Username sudah dipakai!";
    header("Location: ../auth.php?action=register");
    exit;
} else {
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $sql_insert = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    if ($conn->query($sql_insert) === TRUE) {
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
        exit;
    } else {
        $_SESSION['error'] = "Terjadi kesalahan, coba lagi.";
        header("Location: ../auth.php?action=register");
        exit;
    }
}

$conn->close();
