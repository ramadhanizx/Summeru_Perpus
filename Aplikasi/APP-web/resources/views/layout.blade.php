<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Perpus</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- cdn icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-12/assets/css/login-12.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Main CSS File -->
    <link href="assets/css/cth.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/logoMe/Logo.png">



</head>
<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="{{ route('layout') }}#heropo" class="logo d-flex align-items-center me-auto">
                <h1 class="Poppins" style="font-family: 'Poppins', sans-serif; font-weight: bold; font-size: 24px;">
                    Sumeru-Perpus</h1>
            </a>
            <!--------------------------------------------------- Navbar --------------------------------------------------->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('layout') }}#heropo" class="">Home</a></li>
                    <li><a href="{{ route('layout') }}#about">About</a></li>
                    <li><a href="{{ route('layout') }}#book">Book</a></li>
                    <li><a href="{{ route('layout') }}#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
    
        <!--------------------------------------------------- end Navbar --------------------------------------------------->


        <!--------------------------------------------------- Home Section --------------------------------------------------->
    <main class="main">
        <section id="heropo" class="hero section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h2 style="color: #8000ff">Halo, Selamat datang</h2>
                        <br>
                        <h1>Temukan Inspirasimu, dengan membaca buku</h1>
                        <br>
                        <h5 style="font-weight: normal;">Belajar membaca akan membuat literasimu semakin luas. Daftar
                            sekarang juga gratis.</h5>
                        <br>
                        <div class="d-flex">
                            <!-- Menambahkan margin kanan pada tombol Daftar Sekarang -->
                            <a href="{{ url('login') }}" class="btn btn-daftar mr-2">Daftar Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="./assets/img/komponen/banner.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!--------------------------------------------------- end Home Section --------------------------------------------------->


        <!--------------------------------------------------- About Section --------------------------------------------------->

        <!-- Pastikan Anda sudah memasukkan script dan style untuk AOS di bagian head -->
         <head>
            <link href="path/to/aos.css" rel="stylesheet">
            <script src="path/to/aos.js"></script>
        </head>
        <section id="about" class="about section">
            <section class="gradient-bg py-3 py-md-5 py-xl-8" data-aos="fade-up" data-aos-delay="200">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-10">
                            <h2 class="mb-4 display-5 text-center text-dark font-weight-bold">About</h2>
                            <div class="text-center mb-4">
                                <img src="./assets/img/komponen/logobook.png" alt="Logo" class="img-fluid" style="max-width: 130px;">
                            </div>
                            <p class="text-secondary mb-5 text-center lead fs-4">
                                Semeru-perpus adalah proyek kolaboratif tiga mahasiswa
                                untuk membuat website perpustakaan sederhana namun fungsional.
                                Cipta Rangga menangani pengembangan back-end dengan Laravel,
                                memastikan basis data terorganisir dan fitur-fitur efisien.
                                Fadhil Vidiarta menciptakan antarmuka menarik dan responsif
                                menggunakan CSS Bootstrap dan CSS murni. Imam Ramadhani melakukan
                                pengujian menyeluruh untuk memastikan web berjalan lancar dan bebas
                                bug. Dengan teknologi Laravel, CSS Bootstrap, dan PHP, web ini
                                menjadi solusi efektif untuk pengelolaan perpustakaan digital.
                            </p>
                            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                        </div>
                    </div>
                </div>
            </section>
            <div class="container overflow-hidden">
                <div class="row gy-4 gy-lg-0 gx-xxl-5">
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card border-1 border-bottom border-secondary shadow-sm overflow-hidden">
                            <div class="card-body p-0">
                                <figure class="m-0 p-0">
                                    <img class="img-fluid uniform-img" loading="lazy" src="./assets/img/human/imam1.jpg" alt="Imam">
                                    <figcaption class="m-0 p-4">
                                        <h4 class="mb-1">Imam</h4>
                                        <p class="text-secondary mb-0">Penguji</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card border-1 border-bottom border-secondary shadow-sm overflow-hidden">
                            <div class="card-body p-0">
                                <figure class="m-0 p-0">
                                    <img class="img-fluid uniform-img" loading="lazy" src="./assets/img/human/fadil4.jpeg" alt="fadhil">
                                    <figcaption class="m-0 p-4">
                                        <h4 class="mb-1">Fadhil</h4>
                                        <p class="text-secondary mb-0">Desainer</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card border-1 border-bottom border-secondary shadow-sm overflow-hidden">
                            <div class="card-body p-0">
                                <figure class="m-0 p-0">
                                    <img class="img-fluid uniform-img" loading="lazy" src="./assets/img/human/cipta2.jpg" alt="Cipta">
                                    <figcaption class="m-0 p-4">
                                        <h4 class="mb-1">Cipta</h4>
                                        <p class="text-secondary mb-0">Programmer</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br><br><br>

        <!----------------------------------------------- / end About Section -------------------------------------------------------->


        <!----------------------------------------------------  book -------------------------------------------------------->
    <section id="book" class="book section">
        <section id="Segera">
            <h1 class="text-center text-dark font-weight-bold" style="margin-bottom: 50px; font-size: 50px;">Book</h1>
            <!-- Manga Section -->
            <h1 class="text-center" style="color: #37517e; margin-bottom: 20px;">Manga</h1>
            <div class="container">
            	<div class="row">
            		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            			<a href="{{ url('/buku1') }}" target="_blank" rel="noopener noreferrer" class="poster-link">
            			<div class="poster">
            				<img src="./assets/img/book/86.jpg" class="img-fluid" alt="86">
            				<div class="info">
            					<h2 class="text-center">86</h2>
            					<p class="text-center text-light">2021 | Asato</p>
            				</div>
            			</div>
            			</a>
            		</div>
            		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            			<a href="{{ url('/buku2') }}" target="_blank" rel="noopener noreferrer" class="poster-link">
            			<div class="poster">
            				<img src="./assets/img/book/fiksi.jpg" class="img-fluid" alt="Mushoku Tensei Jobless">
            				<div class="info">
            					<h2 class="text-center">Mushoku Tensei Jobless</h2>
            					<p class="text-center text-light">2021 | Rifujin na Magonote</p>
            				</div>
            			</div>
            			</a>
            		</div>
            		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
            			<a href="{{ url('/buku3') }}" target="_blank" rel="noopener noreferrer" class="poster-link">
            			<div class="poster">
            				<img src="./assets/img/book/Otonari no.jpg" class="img-fluid" alt="Otonari no Tenshi-sma">
            				<div class="info">
            					<h2 class="text-center">Otonari no Tenshi-sma</h2>
            					<p class="text-center text-light">2021 | Hanekoto</p>
            				</div>
            			</div>
            			</a>
            		</div>

                    <!-- Novel Section -->
                    <h1 class="text-center" style="color: #37517e; margin-bottom: 20px;">Novel</h1>
            		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
            			<a href="{{ url('/buku4') }}" target="_blank" rel="noopener noreferrer" class="poster-link">
            			<div class="poster">
            				<img src="./assets/img/book/Bulan1.png" class="img-fluid" alt="Bulan">
            				<div class="info">
            					<h2 class="text-center">Bulan</h2>
            					<p class="text-center text-light">2015 | Tere Liye</p>
            				</div>
            			</div>
            			</a>
            		</div>
            		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
            			<a href="{{ url('/buku5') }}" target="_blank" rel="noopener noreferrer" class="poster-link">
            			<div class="poster">
            				<img src="./assets/img/book/yangFanaadalahWaktu.png" class="img-fluid" alt="Yang Fana adalah Waktu">
            				<div class="info">
            					<h2 class="text-center">Yang Fana adalah Waktu</h2>
            					<p class="text-center text-light">2018 | Sapardi Djoko Damono</p>
            				</div>
            			</div>
            			</a>
            		</div>
            		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
            			<a href="{{ url('/buku6') }}" target="_blank" rel="noopener noreferrer" class="poster-link">
            			<div class="poster">
            				<img src="./assets/img/book/Hikikomori Kyuuketsuki.png" class="img-fluid" alt="Hikikomori Kyuuketsuki">
            				<div class="info">
            					<h2 class="text-center">Hikikomori Kyuuketsuki</h2>
            					<p class="text-center text-light">2024 | Kotei Kobayashi</p>
            				</div>
            			</div>
            			</a>
            		</div>

                    <!-- Pendidikan Section -->
                    <h1 class="text-center" style="color: #37517e; margin-bottom: 20px;">Pendidikan</h1>
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
            			<a href="{{ url('/buku7') }}" target="_blank" rel="noopener noreferrer" class="poster-link">
            			<div class="poster">
            				<img src="./assets/img/book/Atletik.png" class="img-fluid" alt="Atletik">
            				<div class="info">
            					<h2 class="text-center">Atletik</h2>
            					<p class="text-center text-light">2008 | Munasifah</p>
            				</div>
            			</div>
            			</a>
            		</div>
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
            			<a href="{{ url('/buku8') }}" target="_blank" rel="noopener noreferrer" class="poster-link">
            			<div class="poster">
            				<img src="./assets/img/book/Tatanan OrdeBaru.png" class="img-fluid" alt="Tatanan Orde Baru">
            				<div class="info">
            					<h2 class="text-center">Tatanan Orde Baru</h2>
            					<p class="text-center text-light">2018 | Endang Retnowati</p>
            				</div>
            			</div>
            			</a>
            		</div>
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
            			<a href="{{ url('/buku9') }}" target="_blank" rel="noopener noreferrer" class="poster-link">
            			<div class="poster">
            				<img src="./assets/img/book/Phyton.png" class="img-fluid" alt="Phyton">
            				<div class="info">
            					<h2 class="text-center">Langkah Awal Menguasai Bahasa Pemrograman Phyton</h2>
            					<p class="text-center text-light">2023 | Wijananto</p>
            				</div>
            			</div>
            			</a>
            		</div>
            	</div>
            </div>
        </section>
    </section>
       <!-------------------------------------------------------- end book -------------------------------------------------------->


        <!-------------------------------------------------------- footer  -------------------------------------------------------->

        <section id="contact" class="contact section">
        <footer class="foot text-light pt-5">
            <div class="container px-5">
                <div class="row">
                    <div class="col-6 col-lg-4">
                        <h3 class="fw-bold">Sumeru-Perpus</h3>
                    </div>
                    <div class="col">
                        <h4>Menu</h4>
                        <ul class="list-unstyled pt-2">
                            <li class="py-1"><a href="{{ route('layout') }}#heropo" class="text-light text-decoration-none">Home</a></li>
                            <li class="py-1"><a href="{{ route('layout') }}#about" class="text-light text-decoration-none">About</a></li>
                            <li class="py-1"><a href="{{ route('layout') }}#contact" class="text-light text-decoration-none">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Book</h4>
                        <ul class="list-unstyled pt-2">
                            <li class="py-1"><a href="#book" class="text-light text-decoration-none">Manga</a></li>
                            <li class="py-1"><a href="#book" class="text-light text-decoration-none">Novel</a></li>
                            <li class="py-1"><a href="#book" class="text-light text-decoration-none">Pendidikan</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 text-lg-start">
                        <h4>Contact Social Media </h4>
                        <div class="mt-4 social-icons">
                            <a href="https://www.instagram.com/yourusername" target="_blank" class="text-decoration-none me-3">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="mailto:youremail@example.com" target="_blank" class="text-decoration-none me-3">
                                <i class="fas fa-envelope fa-2x"></i>
                            </a>
                            <a href="https://www.facebook.com/yourusername" target="_blank" class="text-decoration-none">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="botom-fot">
                    <hr class="bg-light">
                        <a href="#about" class="text-secondary text-center d-block"><i class="fa fa-copyright" aria-hidden="true"></i> Semeru-Perpus_2024</a>
                </div>
            </div>
        </footer>

            <!----------------------------------------------- /  end  footer  -------------------------------------------------------->

            <!-- Scroll Top -->
            <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <!-- Preloader -->
            <div id="preloader"></div>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
            <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- Main JS File -->
            <script src="./assets/JS/script.js"></script>

            <!-- Script JavaScript tambahan -->
            <script src="lokasi/ke/skrip/tambahan.js"></script>
    </main>
</body>

</html>