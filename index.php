<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sistem Informasi - Tanaman Organik</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                    <a href="index.php" class="navbar-brand d-lg-none"> </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="index.php" class="nav-item nav-link active">Beranda</a>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Jenis Sayuran
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="JenisKangkung.php">Kangkung</a></li>
                                    <li><a class="dropdown-item" href="JenisBayam.php">Bayam</a></li>
                                    <li><a class="dropdown-item" href="JenisSawi.php">Sawi</a></li>
                                    <li><a class="dropdown-item" href="JenisTerong.php">Terong</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Manfaat Sayuran
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="ManfaatKangkung.php">Kangkung</a></li>
                                    <li><a class="dropdown-item" href="ManfaatBayam.php">Bayam</a></li>
                                    <li><a class="dropdown-item" href="ManfaatSawi.php">Sawi</a></li>
                                    <li><a class="dropdown-item" href="ManfaatTerong.php">Terong</a></li>
                                </ul>
                            </li>
                            <a href="video penanaman.php" class="nav-item nav-link">Video Penanaman</a>
                            <a href="video.php" class="nav-item nav-link">Video Pengolahan</a>
                </nav>
            </div>
        </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/bg1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">
                                        <strong>Selamat Datang</strong>
                                    </p>
                                    <h1 class="display-2 text-white mb-4 animated slideInRight">Sistem Informasi
                                        Pengolahan Masakan Tanaman Organik</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="display-6 mb-5">Apa Itu Tanaman Organik?</h2>
            </div>
            <p class="text-center fw-bolder">Tanaman organik merujuk pada tanaman yang ditanam dengan prinsip-prinsip
                pertanian organik, yaitu sistem pertanian yang menekankan penggunaan metode alami dan menghindari
                penggunaan pestisida, herbisida, dan pupuk kimia sintetis. Pertanian organik bertujuan untuk menciptakan
                sistem pertanian yang berkelanjutan dan ramah lingkungan. Dalam budidaya tanaman organik, pengendalian
                hama dan gulma biasanya dilakukan dengan menggunakan metode alami, seperti penggunaan predator alami
                atau bahan alami seperti minyak neem. Pupuk kimia sintetis digantikan dengan pupuk organik yang terbuat
                dari bahan-bahan alami seperti kompos dan pupuk kandang, yang membantu menjaga kesuburan tanah secara
                alami. Rotasi tanaman juga menjadi bagian integral dari pertanian organik untuk mencegah penyebaran
                penyakit tanaman dan meningkatkan keseimbangan nutrisi tanah. Selain itu, tanah dalam pertanian organik
                dianggap sebagai organisme hidup yang perlu dijaga keberagaman mikroba dan organisme lainnya,
                menciptakan ekosistem tanah yang sehat. Pendekatan ini juga melibatkan penghindaran penggunaan tanaman
                yang dimodifikasi secara genetik. Secara keseluruhan, tanaman organik mewakili pendekatan pertanian yang
                lebih berkelanjutan, mengurangi dampak negatif terhadap lingkungan, dan sering dianggap lebih sehat
                karena kurangnya paparan terhadap bahan kimia sintetis.
            </p>
        </div>
    </div>
    <!-- Team End -->
    =
    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>