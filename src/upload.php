<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../auth.php?action=login");
    exit;
}

$targetDir = "../public/uploads/";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $fileName = basename($_FILES['image']['name']);
    $targetFile = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedTypes = ["jpg", "jpeg", "png", "gif", "webp"];
    if (!in_array($fileType, $allowedTypes)) {
        echo "Hanya file JPG, JPEG, PNG, GIF, atau WEBP yang diizinkan.";
        exit;
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        header("Location: ../index.php?upload=success");
        exit;
    } else {
        echo "Terjadi kesalahan saat mengupload file.";
    }
} else {
    echo "Tidak ada file yang diupload.";
}