<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PUSKESMAS BANTAR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets/user/img/LOGO_PKS.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://code.jquery.com/jquery-3.5.1.js" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/user/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="assets/user/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/user/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-success m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h3><img src="assets/user/img/LOGO_PKS.png" width="8%"> Puskesmas Bantar</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu m-0">
                        <a href="/tentang_kami" class="dropdown-item">Tentang Kami</a>
                        <a href="/sejarah" class="dropdown-item">Sejarah Singkat</a>
                        <a href="testimonial.html" class="dropdown-item">Gambaran Umum</a>
                        <a href="appointment.html" class="dropdown-item">Visi dan Misi</a>
                        <a href="appointment.html" class="dropdown-item">Motto dan Tata Nilai</a>
                        <a href="appointment.html" class="dropdown-item">Struktur Organisasi</a>
                        <a href="appointment.html" class="dropdown-item">Tarif Retribusi</a>
                        <a href="appointment.html" class="dropdown-item">Alur Layanan</a>
                        <a href="appointment.html" class="dropdown-item">PKP</a>
                        <a href="appointment.html" class="dropdown-item">SK Pengolahan Data dan Informasi</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pelayanan Umum</a>
                        <a href="team.html" class="dropdown-item">PONED</a>
                        <a href="appointment.html" class="dropdown-item">Poli KIA/KB</a>
                        <a href="appointment.html" class="dropdown-item">Poli Gigi</a>
                        <a href="appointment.html" class="dropdown-item">Poli MTBS</a>
                        <a href="appointment.html" class="dropdown-item">Poli TB Paru</a>
                        <a href="appointment.html" class="dropdown-item">Khitan</a>
                        <a href="appointment.html" class="dropdown-item">Persalinan</a>
                        <a href="appointment.html" class="dropdown-item">Unit Gawat Darurat</a>
                        <a href="appointment.html" class="dropdown-item">Unit Rawat Inap</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="team.html" class="dropdown-item">Our Dentist</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                    </div>
                </div>
                <a href="/berita" class="nav-item nav-link">Berita</a>
                <a href="/galeri" class="nav-item nav-link">Galery</a>
                <a href="/unduhan" class="nav-item nav-link">Unduhan</a>
                <a href="/kontak" class="nav-item nav-link">Kontak</a>
            </div>

            <a href="appointment.html" class="btn btn-success py-2 px-5 ms-2">Daftar Online</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
@yield('container')


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
            <div class="container pt-5">
                <div class="row g-5 pt-4">
                    <div class="col-lg-6 col-md-6">
                        <h3 class="text-white mb-4">Puskesmas Bantar</h3>
                        <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Jalan Bantarsari, Bungursari, Tasikmalaya, Jawa Barat</p>
                        <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>puskesmasbantar123@gmail.com</p>
                        <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>(0265) 312242</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Sosial Media</h3>
                        <div class="d-flex">

                            <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.facebook.com/puskesmas.bantar.9" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/puskesmas.bantar/" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-light py-4" style="background: #051225;">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-md-0">&copy; Copy Right - Puskesmas Bantar 2022</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/user/lib/wow/wow.min.js"></script>
        <script src="assets/user/lib/easing/easing.min.js"></script>
        <script src="assets/user/lib/waypoints/waypoints.min.js"></script>
        <script src="assets/user/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="assets/user/lib/tempusdominus/js/moment.min.js"></script>
        <script src="assets/user/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="assets/user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="assets/user/lib/twentytwenty/jquery.event.move.js"></script>
        <script src="assets/user/lib/twentytwenty/jquery.twentytwenty.js"></script>

        <!-- Template Javascript -->
        <script src="assets/user/js/main.js"></script>
</body>

</html>