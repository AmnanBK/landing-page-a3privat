<?php
include 'db.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
        exit;
    } else {
        $_SESSION['error'] = "Password salah!";
        header("Location: ../auth.php?action=login");
        exit;
    }
} else {
    $_SESSION['error'] = "Username tidak ditemukan!";
    header("Location: ../auth.php?action=login");
    exit;
}

$conn->close();
