<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <header class="bg-light position-sticky w-100 shadow py-2">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 px-4 h1">Gabriel Davinche Manalu</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav d-flex gap-2 fs-6 h2">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.php"> About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-cureent="page" href="Contact.php"> Contact Us </a>
                        </li>
                    </ul>
                </div>
        </nav>
    </header>

    <section class=" news_section  container mt-5">
        <h1 class=" border-bottom border-2"> Berita Terkini</h1>
        <div class="row">
            <div class="news_item row mt-4 py-4 px-3 rounded">
                <div class="col-lg-4 col-md-12 mb-3 ">
                    <img src="https://asset.kompas.com/crops/mWKqPHoDxtbbfa-iyNtjLkTdzv4=/0x0:0x0/750x500/data/photo/2024/09/11/66e0da054be7a.jpg"
                        alt="news_img" class="img-fluid rounded">
                </div>
                <div class="col-lg-8 col-md-12">
                    <h2> Kata Jokowi dan Shin Tae-yong Usai Indonesia Tahan Imbang Australia</h2>
                    <p>Tim Nasional (Timnas) Indonesia berhasil menahan imbang Australia dengan skor 0-0
                        dalam
                        lanjutan babak ketiga Kualifikasi Piala Dunia 2026 di Stadion Gelora Bung Karno (GBK), Jakarta
                        pada
                        Selasa (10/9/2024). Hasil imbang ini membuat Indonesia mengantongi dua poin dan berada di posisi
                        ke-4
                        Grup C Kualifikasi Piala Dunia 2026 Zona Asia... <a href="Beritadetail.html" target=_blank>Lihat
                            selengkapnya</a>
                    </p>
                </div>

                <div class="news_item row mt-4 py-4 px-3 rounded">
                    <div class="col-lg-4 col-md-12 mb-3">
                        <img src="https://asset.kompas.com/crops/JRi-MbHe9EGvIhYqlvCC37vjVxM=/0x0:0x0/750x500/data/photo/2024/09/10/66dfebf42b014.jpg"
                            alt="image" class="img-fluid rounded">
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <h2>DPR dan Pemerintah Sepakat Pilkada Ulang 2025 jika Kotak Kosong Menang</h2>
                        <p>Komisi II DPR RI, Komisi Pemilihan Umum (KPU), Kementerian Dalam Negeri
                            (Kemendagri), Badan Pengawas Pemilu (Bawaslu) dan Dewan Kehormatan Penyelenggara Pemilu
                            (DKPP)
                            bersepakat untuk menggelar Pilkada kembali 2025, jika pilkada suatu daerah dimenangkan kotak
                            kosong... <a href="Beritadetail2.html" target="_blank"> Lihat Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light text-center py-4 mt-5  border">
        <h2> Web Rekomendasi</h2>
        <ul class="d-flex justify-content-center gap-5 px-5">
            <a class="navbar-brand" href="https:www.google.com" target=_blank>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSTLNyHEp8ERADDJDy5wXQLoV_Lj0YTmv6eA&s"
                    alt="Logo" width="30" height="24" class="d-inline-block align-text-top ">
                Google
            </a>

            <a class="navbar-brand" href="https://www.microsoft.com/id-id" target=_blank>
                <img src="https://awsimages.detik.net.id/customthumb/2012/08/24/398/microsoftbaru.jpg?w=600&q=90"
                    alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Microsoft
            </a>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>