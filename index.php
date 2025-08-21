<?php
session_start();
$loggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A3 Privat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">
                <img src="public/images/logo.png" alt="company logo" class="d-inline-block align-text-top px-3">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#vision">Visi & Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profile">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="sidebar bg-light position-fixed vh-100 d-flex flex-column p-3">
        <div class="dropdown mb-3 mt-5">
            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="artikelDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Artikel
            </button>
            <ul class="dropdown-menu w-100" aria-labelledby="artikelDropdown">
                <li><a class="dropdown-item" href="https://belajarkreatif.com/tujuan-bimbingan-belajar-tambahan/">Pentingnya les</a></li>
                <li><a class="dropdown-item" href="https://club.kiddo.id/pengaruh-les-terhadap-prestasi-anak-di-sekolah/">Pengaruh Les</a></li>
                <li><a class="dropdown-item" href="https://www.funteacherprivate.com/blog/7-manfaat-les-privat-dibandingkan-dengan-kelas-formal">Manfaat Les</a></li>
            </ul>
        </div>

        <div class="mt-auto d-grid gap-2">
            <a href="foto.php" class="btn btn-primary">Foto</a>

            <?php if ($loggedIn): ?>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload</button>
                <a href="src/logout.php" class="btn btn-danger">Logout</a>
            <?php else: ?>
                <a href="auth.php?action=login" class="btn btn-outline-primary">Sign In</a>
                <a href="auth.php?action=register" class="btn btn-success">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="main-content">
        <section id="home" class="home">
            <div class="hero-container d-flex flex-column align-items-center justify-content-start">
                <div class="hero-title text-center mb-2">
                    <h1>A3 PRIVAT</h1>
                </div>

                <div class="hero-content d-flex align-items-center justify-content-between w-100">
                    <div class="hero-text">
                        <h2>Ubah Cara Belajar Anak Anda, Wujudkan Prestasinya.</h2>
                        <p>Temukan metode bimbingan yang paling sesuai untuk putra-putri Anda bersama tutor ahli dari A3 privat.</p>
                    </div>
                    <div class="hero-img">
                        <img src="public/images/hero-img.jpg" alt="hero image">
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about-section">
            <div class="container">
                <h2 class="section-title text-center mb-4">About Us</h2>
                <p class="section-text">
                    Kami percaya bahwa pendidikan bukanlah perlombaan, melainkan sebuah perjalanan unik untuk setiap anak.
                    Di A3 Privat, kami hadir sebagai mitra terpercaya Anda untuk menavigasi perjalanan tersebut.
                    Melalui bimbingan personal dari tutor-tutor pilihan, kami fokus membuka potensi tersembunyi
                    dan menumbuhkan kecintaan pada proses belajar. Misi kami adalah membantu putra-putri Anda,
                    dari jenjang TK hingga SMA, menemukan kilaunya dan meraih prestasi dengan penuh percaya diri.
                </p>
            </div>
        </section>
        <section id="vision" class="vision-section">
            <div class="container text-center">
                <h2 class="section-title mb-3">Visi</h2>
                <p class="section-text mb-5">
                    Mewujudkan generasi pembelajar yang percaya diri, kreatif, dan siap berprestasi.
                </p>

                <h2 class="section-title mb-4">Misi</h2>
                <div class="misi-container d-flex justify-content-between flex-wrap">
                    <div class="misi-item">
                        <h4>Pembelajaran Adaptif</h4>
                        <p>Merancang sesi belajar yang spesifik untuk setiap siswa.</p>
                    </div>
                    <div class="misi-item">
                        <h4>Pengajar Inspiratif</h4>
                        <p>Menyediakan mentor, bukan sekadar guru.</p>
                    </div>
                    <div class="misi-item">
                        <h4>Motivasi Berkelanjutan</h4>
                        <p>Membangun semangat belajar yang bertahan lama.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="profile" class="profile-section">
            <div class="container">
                <h2 class="section-title text-center mb-4">Profile</h2>
                <p class="section-text">
                    A3 Privat adalah lembaga pendidikan profesional yang fokus pada layanan les privat personal untuk semua jenjang, dari TK hingga SMA. Sejak didirikan, kami berdedikasi untuk menyediakan bimbingan berkualitas yang tidak hanya meningkatkan nilai, tetapi juga membangun fondasi belajar yang kokoh untuk masa depan.
                </p>
            </div>
        </section>
        <section id="services" class="services-section">
            <div class="container text-center">
                <h2 class="section-title mb-5">Our Services</h2>
                <div class="services-container d-flex justify-content-between flex-wrap">
                    <div class="service-item">
                        <h4>Tingkat TK</h4>
                        <ul>
                            <li>Membaca, Menulis, Berhitung (Calistung)</li>
                            <li>Pengenalan Konsep Dasar Sains & Logika</li>
                            <li>Pengembangan Motorik Halus</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <h4>Tingkat SD</h4>
                        <ul>
                            <li>Semua Mata Pelajaran (Matematika, IPA, IPS, B. Indo, dll.)</li>
                            <li>Persiapan Ulangan Harian & Ujian Sekolah</li>
                            <li>Pembentukan Pola Pikir & Logika</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <h4>Tingkat SMP</h4>
                        <ul>
                            <li>Mata Pelajaran Kunci (Matematika, Fisika, Biologi, B. Inggris)</li>
                            <li>Persiapan Penilaian Tengah/Akhir Semester (PTS/PAS)</li>
                            <li>Strategi Belajar Efektif & Manajemen Waktu</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <h4>Tingkat SMA</h4>
                        <ul>
                            <li>Fokus Jurusan (Fisika, Kimia, Ekonomi, Sosiologi, dll.)</li>
                            <li>Persiapan Intensif UTBK-SNBT</li>
                            <li>Konsultasi Pemilihan Jurusan Kuliah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallery" class="gallery-section">
            <div class="container text-center">
                <h2 class="section-title mb-5">Gallery</h2>
                <div class="gallery-flex d-flex flex-wrap justify-content-center gap-3">
                    <div class="gallery-item"><img src="public/images/gallery1.webp" alt="Gallery 1"></div>
                    <div class="gallery-item"><img src="public/images/gallery2.webp" alt="Gallery 2"></div>
                    <div class="gallery-item"><img src="public/images/gallery3.webp" alt="Gallery 3"></div>
                    <div class="gallery-item"><img src="public/images/gallery4.webp" alt="Gallery 4"></div>
                    <div class="gallery-item"><img src="public/images/gallery5.webp" alt="Gallery 5"></div>
                    <div class="gallery-item"><img src="public/images/gallery6.webp" alt="Gallery 6"></div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact-section">
            <div class="container text-center">
                <h2 class="section-title mb-5">Contact Us</h2>
                <div class="contact-info d-flex flex-wrap justify-content-center gap-4 mb-4">
                    <div class="contact-item">
                        <h5>Phone</h5>
                        <p><a href="tel:++62859131185050">+62 8591 3118 5050</a></p>
                    </div>
                    <div class="contact-item">
                        <h5>Email</h5>
                        <p><a href="mailto:a3lesprivatjogja@gmail.com">a3lesprivatjogja@gmail.com</a></p>
                    </div>
                    <div class="contact-item">
                        <h5>Instagram</h5>
                        <p><a href="https://instagram.com/lesprivatjogjaa3privat" target="_blank">@lesprivatjogjaa3privat</a></p>
                    </div>
                    <div class="contact-item">
                        <h5>Facebook</h5>
                        <p><a href="https://facebook.com/a3privat" target="_blank">A3 Privat</a></p>
                    </div>
                </div>
                <div class="contact-address">
                    <h5>Our Office</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.273281372596!2d0!3d0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58e58f5e113b%3A0x356a5192c3c14f5b!2sA3%20PRIVAT!5e0!3m2!1sid!2sid!4v1755673638623!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </div>

    <?php if ($loggedIn): ?>
        <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="src/upload.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadModalLabel">Upload Gambar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="file" name="image" accept="image/*" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning">Upload</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <script>
        const logo = document.querySelector('.navbar-brand');
        const sidebar = document.querySelector('.sidebar');

        logo.addEventListener('click', (e) => {
            e.preventDefault();
            sidebar.classList.toggle('active');
        });

        document.addEventListener('click', (e) => {
            if (!sidebar.contains(e.target) && !logo.contains(e.target) && sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });
    </script>
</body>

</html>