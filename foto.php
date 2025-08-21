<?php
session_start();
$uploadDir = "public/uploads/";

$images = glob($uploadDir . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/foto.css">
</head>

<body>
    <div class="text-center my-3">
        <a href="index.php" class="btn btn-primary">Kembali ke Home</a>
    </div>
    <h1 class="text-center mb-4">Foto</h1>

    <?php if (!empty($images)): ?>
        <div class="gallery-container">
            <?php foreach ($images as $img): ?>
                <div class="gallery-card">
                    <img src="<?php echo $img; ?>" alt="Uploaded Image">
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-center">Belum ada gambar yang di-upload.</p>
    <?php endif; ?>
</body>

</html>